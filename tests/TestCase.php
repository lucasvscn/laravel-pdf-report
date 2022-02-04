<?php

namespace LucasVscn\PdfReport\Tests;

use LucasVscn\PdfReport\PdfReportServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app): array
    {
        return [PdfReportServiceProvider::class];
    }
}
