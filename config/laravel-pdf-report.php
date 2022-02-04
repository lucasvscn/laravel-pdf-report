<?php

return [

    'css_path' => base_path('public/css/report.css'),

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components are loaded in. You can disable or overwrite
    | any component class or alias that you want.
    |
    */

    'components' => [
        'pdf-report' => 'laravel-pdf-report::components.pdf-report',
        'pdf-page' => 'laravel-pdf-report::components.pdf-page',
        'pdf-table' => 'laravel-pdf-report::components.pdf-table',
        'pdf-card' => 'laravel-pdf-report::components.pdf-card',
        'pdf-row' => 'laravel-pdf-report::components.pdf-row',
        'pdf-cell' => 'laravel-pdf-report::components.pdf-cell',
    ],

    /*
    |--------------------------------------------------------------------------
    | Components Prefix
    |--------------------------------------------------------------------------
    |
    | This value will set a prefix for all PDF Report components.
    | By default it's empty. This is useful if you want to avoid
    | collision with components from other libraries.
    |
    | If set with "ex", for example, you can reference components like:
    |
    | <x-ex-pdf-report />
    |
    */

    'prefix' => '',
];
