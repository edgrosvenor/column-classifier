# Column Classifier
[![Latest Version on Packagist](https://img.shields.io/packagist/v/edgrosvenor/column-classifier.svg?style=flat-square)](https://packagist.org/packages/edgrosvenor/column-classifier)
![ChipperCI](https://app.chipperci.com/projects/dc3f3b49-2533-4949-8b89-677c2177c0a4/status/master)
[![StyleCI](https://github.styleci.io/repos/238271852/shield?branch=master)](https://github.styleci.io/repos/238271852)

A Laravel package that takes a collection of data and attempts to identify what kind of data it is. It's kind of designed to meet my own specific needs, but I'll happily accept pull requests and suggestions to make it better if others want to use it.

### Installation
`composer require edgrosvenor/column-classifier`

### Usage
```php
use ColumnClassifier\Classifier;

$classify = new Classifier(collect(['this', 'that', 'the other thing']));

$data_type = $classify->execute();

```
This will return one of the following: first_name, last_name, full_name, phone, email, city, state, state_abbr, zip_code, country, country_code, currency, company, job_title, sentence, paragraph, html

### Use Cases

I use this to help me determine which Faker method makes the most sense when automatically creating model factories. I also use it to help me parse user-uploaded spreadsheets of data without knowing what type of data is in each column. I also use it to help me keep a contacts database up to date based on changes to HTML directories.





