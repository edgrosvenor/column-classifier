<?php

namespace ColumnClassifier;

use ColumnClassifier\Models\City;
use ColumnClassifier\Models\Country;
use ColumnClassifier\Models\Currency;
use ColumnClassifier\Models\FirstName;
use ColumnClassifier\Models\JobTitle;
use ColumnClassifier\Models\Surname;
use ColumnClassifier\Models\USState;
use Illuminate\Support\Collection;

class Classifier
{
    protected $data;
    protected $results;
    protected $sentence_regex = '/(?<=[.!?]|[.!?][\'"])\s+(?=\S)/';

    public function __construct(Collection $data)
    {
        $this->data = $data;
        $this->results = [
            'first_name'   => 0,
            'last_name'    => 0,
            'full_name'    => 0,
            'phone'        => 0,
            'email'        => 0,
            'city'         => 0,
            'state'        => 0,
            'state_abbr'   => 0,
            'zip_code'     => 0,
            'country'      => 0,
            'country_code' => 0,
            'currency'     => 0,
            'company'      => 0,
            'job_title'    => 0,
            'sentence'     => 0,
            'paragraph'    => 0,
            'html'         => 0,
        ];
    }

    public function execute()
    {
        $this->data->each(function ($row) {
            foreach ($this->results as $k => $v) {
                $this->results[$k] += $this->$k($row);
            }
        });
        $this->results['word'] = (int) $this->data->count() / 2;
        asort($this->results);

        return last(array_keys($this->results));
    }

    private function first_name($row)
    {
        return FirstName::where('name', strtolower(strtolower(trim($row))))->count();
    }

    public function last_name($row)
    {
        return Surname::where('name', strtolower(strtolower(trim($row))))->count();
    }

    private function full_name($row)
    {
        $parts = explode(' ', $row);
        if (count($parts) < 2 || count($parts) > 4) {
            return 0;
        }
        foreach ($parts as $part) {
            if (FirstName::where('name', strtolower(strtolower(trim($part))))->count() > 0) {
                return 1;
            }
            if (Surname::where('name', strtolower(strtolower(trim($part))))->count() > 0) {
                return 1;
            }
        }

        return 0;
    }

    public function phone($row)
    {
        $numbers = ltrim(preg_replace(['/[^0-9]/'], '', $row), '1');

        return strlen($numbers) === 10;
    }

    public function email($row)
    {
        return filter_var(trim($row), FILTER_VALIDATE_EMAIL) ? 1 : 0;
    }

    public function city($row)
    {
        return City::where('city', strtolower(trim($row)))->count() > 0;
    }

    public function state($row)
    {
        return USState::where('state', strtolower(trim($row)))->count();
    }

    public function state_abbr($row)
    {
        return USState::where('abbr', strtolower(trim($row)))->count();
    }

    public function zip_code($row)
    {
        return is_numeric(trim((string) $row)) && strlen(trim((string) $row)) === 5;
    }

    public function country($row)
    {
        return Country::where('country', strtolower(trim($row)))->count();
    }

    public function country_code($row)
    {
        if ($this->state_abbr($row)) {
            return 0;
        }

        return Country::where('code', strtolower(trim($row)))->count();
    }

    public function currency($row)
    {
        return Currency::where('code', strtoupper(trim($row)))->count();
    }

    public function company($row)
    {
        if (is_numeric($row)) {
            return 0;
        }
        if (strlen($row) < 4) {
            return 0;
        }
        if (count(explode(' ', $row)) > 3) {
            return 0;
        }
        if (ucwords($row) != $row) {
            return 0;
        }
        if ($this->last_name($row)) {
            return 0;
        }
        if ($this->currency($row) || $this->country($row) || $this->country_code($row) || $this->state($row)
            || $this->phone($row) || $this->full_name($row) || $this->first_name($row)) {
            return 0;
        }

        return 1;
    }

    public function job_title($row)
    {
        return JobTitle::where('title', strtolower($row))->count();
    }

    public function sentence($row)
    {
        return count(explode(' ', $row)) > 4 && in_array(substr($row, -1), ['.', '?', '!']) && count(preg_split($this->sentence_regex, $row, -1, PREG_SPLIT_NO_EMPTY)) < 2;
    }

    public function paragraph($row)
    {
        return count(preg_split($this->sentence_regex, $row, -1, PREG_SPLIT_NO_EMPTY)) > 1;
    }

    public function html($row)
    {
        return $row != strip_tags($row);
    }
}
