# Laravel PDF Report

Blade components to build PDF reports using [DOMPdf](https://github.com/dompdf/dompdf).

## Install

Download the package with Composer.

```bash
composer require lucasvscn/laravel-pdf-report
```

Then install command will copy the assets into your application's folder.

```bash
php artisan laravel-pdf-report:install
```

Compile your assets (optional).

```bash
npm run dev
```

## Usage

Now you can use this blade components to build your layout.

```html
<!-- PATH: resources/views/pdf/report.blade.php -->
<x-pdf-report>
    <x-slot name="header">
        <h1>Report header</h1>
    </x-slot>

    <x-slot name="footer">
        Page <span class="page_number"></span>
    </x-slot>

    <x-pdf-page>
        Content for the 1st page.
    </x-pdf-page>

    <x-pdf-page>
        Content for the nth page...
    </x-pdf-page>
</x-pdf-report>
```

Generate the PDF using [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf) package.

```php
    use Barryvdh\DomPDF\Facade\Pdf;

    $pdf = Pdf::loadView('pdf.report');
    return $pdf->stream();
```

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
