<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfCellTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
                <x-pdf-cell>
                    Text
                </x-pdf-cell>
            HTML;

        $expected = <<<'HTML'
            <td class="col-12"> <span class="cell-content">Text</span>
            </td>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_change_size()
    {
        $template = <<<'HTML'
                <x-pdf-cell size="6">
                    Text
                </x-pdf-cell>
            HTML;

        $expected = <<<'HTML'
            <td class="col-6"> <span class="cell-content">Text</span>
            </td>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
