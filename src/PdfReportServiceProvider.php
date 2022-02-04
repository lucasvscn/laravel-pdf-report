<?php

namespace LucasVscn\PdfReport;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

/**
 * @package LucasVscn\PdfReport
 */
class PdfReportServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-pdf-report.php', 'laravel-pdf-report');
    }

    /**
     * @return void
     */
    public function boot(BladeCompiler $blade): void
    {
        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootPublishing();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-pdf-report');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('laravel-pdf-report.prefix', '');

            /** @var BladeComponent $component */
            foreach (config('laravel-pdf-report.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
            }
        });
    }

    private function bootPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-pdf-report.php' => $this->app->configPath('laravel-pdf-report.php'),
            ], 'laravel-pdf-report-config');

            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/laravel-pdf-report'),
            ], 'laravel-pdf-report-views');
        }
    }
}
