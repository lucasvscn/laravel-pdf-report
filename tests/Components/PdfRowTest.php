<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfRowTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
                <x-pdf-row>
                </x-pdf-row>
            HTML;

        $expected = <<<'HTML'
            <tr>
                <td>
                    <table>
                        <tr></tr>
                    </table>
                </td>
            </tr>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_render_attributes()
    {
        $template = <<<'HTML'
                <x-pdf-row class="bordered">
                </x-pdf-row>
            HTML;

        $expected = <<<'HTML'
            <tr>
                <td>
                    <table class="bordered">
                        <tr></tr>
                    </table>
                </td>
            </tr>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
