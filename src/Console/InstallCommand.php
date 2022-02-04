<?php

namespace LucasVscn\PdfReport\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'laravel-pdf-report:install';

    protected $description = 'Install the Laravel PDF Report components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        // Directories...
        (new Filesystem)->ensureDirectoryExists(public_path('css'));
        (new Filesystem)->ensureDirectoryExists(resource_path('sass'));

        // Assets...
        copy(__DIR__.'/../../stubs/public/css/report.css', public_path('css/report.css'));
        copy(__DIR__.'/../../stubs/resources/sass/report.scss', resource_path('sass/report.scss'));

        // Laravel Mix configuration...
        $this->appendToFile("mix.sass('resources/sass/report.scss', 'public/css');", base_path('webpack.mix.js'));

        $this->line('');
        $this->info('Laravel PDF Report installed successfully.');
        $this->comment('Please execute "npm install && npm run dev" to build your assets.');
    }

    protected function appendToFile($string, $path)
    {
        file_put_contents($path, $string);
    }
}
