<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfTableTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
                <x-pdf-table>
                </x-pdf-table>
            HTML;

        $expected = <<<'HTML'
            <table class="table"></table>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_render_attributes()
    {
        $template = <<<'HTML'
                <x-pdf-table class="bordered">
                </x-pdf-table>
            HTML;

        $expected = <<<'HTML'
            <table class="table bordered"></table>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
