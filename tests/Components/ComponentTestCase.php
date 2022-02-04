<?php

namespace LucasVscn\PdfReport\Tests\Components;

use Gajus\Dindent\Indenter;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use LucasVscn\PdfReport\Tests\TestCase;

class ComponentTestCase extends TestCase
{
    use InteractsWithViews;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravel-pdf-report.css_path', __DIR__.'/../../stubs/report.css');

        $this->artisan('view:clear');
    }

    protected function assertComponentRenders($expected, $template, array $data = []): void
    {
        $blade = (string) $this->blade($template, $data);

        $indenter = new Indenter();
        $indented = $indenter->indent($blade);
        $cleaned = str_replace(
            // [' >', "\n/>", ' </div>', '> ', "\n>"],
            // ['>', ' />', "\n</div>", ">\n    ", '>'],
            [' >'],
            ['>'],
            $indented,
        );


        $this->assertSame($expected, $cleaned);
    }
}
