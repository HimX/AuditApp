<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */

    'pdf' => [
        'enabled' => true,
        'binary' => env('WKHTML_PDF_BINARY', '/usr/local/bin/wkhtmltopdf'),
        'timeout' => false,
        'options' => [
            'quiet' => true,
            'disable-smart-shrinking' => true,
            'images' => true,
            'page-size' => 'A4',
            'enable-local-file-access' => 'none',
            'temporary_folder' => './',
//            'images' => true,
//            'no-images' => false,
//            'encoding' => 'utf-8',
//            'disable-smart-shrinking' => true,
//            'page-size' => 'A4',
//            'margin-top' => 0,
//            'margin-left' => 0,
//            'margin-right' => 0,
//            'margin-bottom' => 0,
//            'load-error-handling' => 'ignore',
//            'load-media-error-handling' => 'ignore',
//            'enable-local-file-access' => true,
        ],
        'env' => [
            'temporary_folder' => './'
        ],
    ],

    'image' => [
        'enabled' => true,
        'binary' => env('WKHTML_IMG_BINARY', '/usr/local/bin/wkhtmltoimage'),
        'timeout' => false,
        'options' => [],
        'env' => [],
    ],

];
