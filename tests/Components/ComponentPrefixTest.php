<?php

namespace LucasVscn\PdfReport\Tests\Components;

class ComponentPrefixTest extends ComponentTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('laravel-pdf-report.prefix', 'ex');
    }

    public function test_can_set_a_config_prefix()
    {
        $expected = <<<'HTML'
            <table class="table-card"></table>
            HTML;

        $this->assertComponentRenders($expected, '<x-ex-pdf-card />');
    }
}
