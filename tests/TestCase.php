<?php

namespace Tests;

use ColumnClassifier\ColumnClassifierServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();

    }



    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:r0w0xC+mYYqjbZhHZ3uk1oH63VadA3RKrMW52OlIDzI=');
    }
}