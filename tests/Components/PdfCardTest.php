<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfCardTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
            <x-pdf-card>
                Content goes here
            </x-pdf-card>
            HTML;

        $expected = <<<'HTML'
            <table class="table-card"> Content goes here
            </table>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_render_attributes()
    {
        $template = <<<'HTML'
            <x-pdf-card class="bordered">
            </x-pdf-card>
            HTML;

        $expected = <<<'HTML'
            <table class="table-card bordered"></table>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
