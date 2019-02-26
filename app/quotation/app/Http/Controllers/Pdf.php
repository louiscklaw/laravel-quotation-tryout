<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use PDF;

class pdf_helloworld{

}

class PdfHelper
{

    public function pdf_helloworld()
    {
        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::Write(0, 'Hello World');
        PDF::Output('hello_world.pdf');


        // return 'helloworld pdf';
    }

    public function gen_pdf()
    {
        return PdfHelper::pdf_helloworld();
    }

}
