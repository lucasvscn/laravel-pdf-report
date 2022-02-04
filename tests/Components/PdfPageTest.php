<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfPageTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
                <x-pdf-page>
                    Content goes here
                </x-pdf-page>
            HTML;

        $expected = <<<'HTML'
            <div class="page">Content goes here</div>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_render_attributes()
    {
        $template = <<<'HTML'
                <x-pdf-page class="extra-class" id="uniqueId">
                    Content goes here
                </x-pdf-page>
            HTML;

        $expected = <<<'HTML'
            <div class="page extra-class" id="uniqueId">Content goes here</div>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
