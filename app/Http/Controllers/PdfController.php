<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    public function show()
    {
        return view('pdf.invoice');
    }

    public function download()
    {
        $content = view('pdf.invoice')->render();
        Browsershot::html($content)
            ->waitUntilNetworkIdle()
            ->noSandbox()
            ->ignoreHttpsErrors()
            ->timeout(120)
            ->savePdf('jej1.pdf');
        return view('pdf.invoice');
    }
}
