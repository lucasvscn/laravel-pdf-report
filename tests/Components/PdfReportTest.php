<?php

namespace LucasVscn\PdfReport\Tests\Components;

class PdfReportTest extends ComponentTestCase
{
    public function test_can_render()
    {
        $template = <<<'HTML'
            <x-pdf-report>
                Content Here.
            </x-pdf-report>
            HTML;

        $expected = <<<'HTML'
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <style> /* css rules */
            </style>
                </head>
                <body>
                    <div id="main"> Content Here. </div>
                </body>
            </html>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }

    public function test_can_render_with_header_and_footer()
    {
        $template = <<<'HTML'
            <x-pdf-report>
                <x-slot name="header">
                    Header Text
                </x-slot>

                <x-slot name="footer">
                    Footer Text
                </x-slot>

                Content Here.
            </x-pdf-report>
            HTML;

        $expected = <<<'HTML'
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <style> /* css rules */
            </style>
                </head>
                <body>
                    <div id="header"> Header Text </div>
                    <div id="footer"> Footer Text </div>
                    <div id="main"> Content Here. </div>
                </body>
            </html>
            HTML;

        $this->assertComponentRenders($expected, $template);
    }
}
