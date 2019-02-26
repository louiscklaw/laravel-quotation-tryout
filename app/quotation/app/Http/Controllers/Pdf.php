<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use PDF;

class PdfHelper
{

    public function pdf_helloworld()
    {
        for ($i = 0; $i < 5; $i++) {
            PDF::SetTitle('Hello World'.$i);
            PDF::AddPage();
            PDF::Write(0, 'Hello World'.$i);
            PDF::Output(public_path('hello_world' . $i . '.pdf'), 'F');
            PDF::reset();
          }


        // return 'helloworld pdf';
    }

    public function gen_pdf()
    {
        return PdfHelper::pdf_helloworld();
    }

}
