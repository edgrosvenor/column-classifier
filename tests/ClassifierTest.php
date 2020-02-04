<?php

namespace Tests;

use ColumnClassifier\Classifier;
use ColumnClassifier\Models\Surname;

class ClassifierTest extends TestCase
{
    /** @test */
    public function can_consume_sushi()
    {
        $this->assertEquals(Surname::first()->name, 'smith');
    }

    /** @test */
    public function can_find_first_name()
    {
        $rows = collect([
            'Ed', 'Simon', 'Barry', 'Milo', 'Justine', 'Justin', 'Kim',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('first_name', $classify->execute());
    }

    /** @test */
    public function can_find_full_name()
    {
        $rows = collect([
            'Steve Hoover',
            'Barry Tarter',
            'Simon Clements',
            'Ed Grosvenor',
            'Sam Morgan',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('full_name', $classify->execute());
    }

    /** @test */
    public function can_find_phone()
    {
        $rows = collect([
            '(800) 588-2300',
            '800.588.2300',
            '800-5882300',
            '1(800)588-2300',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('phone', $classify->execute());
    }

    /** @test */
    public function can_find_email()
    {
        $rows = collect([
            'ed.grosvenor@wickedviral.com',
            'ed.grosvenor+this@wickedviral.com',
            'taylor@laravel.com',
            'god@heaven.info',
            'poo@toilet.app',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('email', $classify->execute());
    }

    /** @test */
    public function can_find_city()
    {
        $rows = collect([
            'Manchester', 'Chicago', 'Libertyville', 'Antioch', 'Los Angeles', 'London',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('city', $classify->execute());
    }

    /** @test */
    public function can_find_state()
    {
        $rows = collect([
            'Illinois', 'Michigan', 'Wisconsin', 'California', 'Mississippi',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('state', $classify->execute());
    }

    /** @test */
    public function can_find_state_abbr()
    {
        $rows = collect(['CA', 'CO', 'IL', 'NE', 'AZ', 'AL', 'AK']);

        $classify = new Classifier($rows);

        $this->assertEquals('state_abbr', $classify->execute());
    }

    /** @test */
    public function can_find_zip_code()
    {
        $rows = collect([
            '60048', '50043', '60603', '10043', 20024, 35392, 39912, 88832,
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('zip_code', $classify->execute());
    }

    /** @test */
    public function can_find_country()
    {
        $rows = collect(['United States', 'Great Britain', 'New Zealand', 'Australia', 'Argentina']);

        $classify = new Classifier($rows);

        $this->assertEquals('country', $classify->execute());
    }

    /** @test */
    public function can_find_country_code()
    {
        $rows = collect([
            'US', 'GB', 'NZ', 'IT', 'IR',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('country_code', $classify->execute());
    }

    /** @test */
    public function can_find_currency()
    {
        $rows = collect([
            'USD',
            'GBP',
            'CFH',
            'ALL',
            'AFN',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('currency', $classify->execute());
    }

    /** @test */
    public function can_find_company()
    {
        $rows = collect([
            'Laravel',
            'Sports Authority',
            'Spatie',
            'Fingerhut',
            'Sunglass Hut',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('company', $classify->execute());
    }

    /** @test */
    public function can_find_job_title()
    {
        $rows = collect([
            'Admiral',
            'CEO',
            'Head Waiter',
            'Taproom Attendant',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('job_title', $classify->execute());
    }

    /** @test */
    public function can_find_html()
    {
        $rows = collect([
            '<div class="happy">Happy Div</div>',
            '<div class="sad">Sad Div</div>',
            '<a href="/away">go away</a>',
            '<a href="#back">come back</a>',
            '<a href="mailto:someone@somewhere.tld">whazzup?</a>',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('html', $classify->execute());
    }

    /** @test */
    public function can_find_paragraph()
    {
        $rows = collect([
            'I need to leave soon to pick up my son. I need to leave soon to pick up my son.',
            'What time are we meeting today? What time are we meeting today?',
            'Does any of this stuff really matter in the end? Does any of this stuff really matter in the end?',
        ]);

        $classify = new Classifier($rows);

        $this->assertEquals('paragraph', $classify->execute());
    }

    /** @test */
    public function can_find_surname()
    {
        $rows = collect(['Sandoval', 'Douglas', 'Stevens', 'Smith', 'Jones', 'Johnson']);

        $identify = new Classifier($rows);

        $this->assertEquals('last_name', $identify->execute());
    }

    /** @test */
    public function can_find_sentence()
    {
        $rows = collect([
            'I need to leave soon to pick up my son.',
            'What time are we meeting today?',
            'Does any of this stuff really matter in the end?',
        ]);

        $identify = new Classifier($rows);

        $this->assertEquals('sentence', $identify->execute());
    }
}
