<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //
    public function create()
    {
        $pdf = PDF::loadView('pdfs.invoice');
        
        return $pdf->stream();
    }
}
