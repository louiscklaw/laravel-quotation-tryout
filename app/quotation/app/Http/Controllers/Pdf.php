<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use PDF;

class pdf_helloworld{

}

class PdfHelper
{


    public function get_quotation_header($pdf)
    {
        // letter head
        // top margin = 0
        $pdf->Write(0, 'header', '', 0, 'C', true, 0, false, false, 0);

    }

    public function get_quotation_footer($pdf)
    {
        // bottom margin = -5
        $pdf->SetY(-5);
        $pdf->Write(0, 'footer', '', 0, 'C', true, 0, false, false, 0);
    }

    public function get_client_table($quot_id)
    {

$table=<<<EOF
<table class="Quotation_table">
    <tr>
        <td style="text-align:left; width:15%  ">
            Customer(客戶)
        </td>
        <td style="text-align:left; width:35%; border-left: 1px solid black;font-size:120%;">
            123
        </td>
        <td style="text-align:center; width:15% border-left: 1px solid black;">
            Quotation Date:
        </td>
        <td style="text-align:center; width:35%; border-left: 1px solid black;">
            abc
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:15%; border-top: 1px solid black;">
            Address(地址)
        </td>
        <td style="text-align:left; width:35%; border-left: 1px solid black; border-top: 1px solid black; border-top: 1px soli black;">
            321
        </td>
        <td style="text-align:center; width:15% border-left: 1px solid black; border-top: 1px solid black;">
            QuotatioRef.:
        </td>
        <td style="text-align:center; width:35%; border-left: 1px solid black; border-top: 1px solid black;">
            cba
        </td>
    </tr>
</table>
EOF;
        return $table;
    }

    public function pdf_helloworld()
    {
        // config
        PDF::SetFont('droidsansfallbackhk', '', 8);

        PDF::setHeaderCallback(
            function($pdf)  {
                $this->get_quotation_header($pdf);
            }
        );

        PDF::setFooterCallback(
            function($pdf)  {
                $this->get_quotation_footer($pdf);
            }
        );

        $html='';

        $html = $html.$this->get_client_table(1);


        for($i=0; $i<4;$i++)
        {
            $html= $html.'helloworld html 中文字';
        }

        PDF::SetTitle('Hello World');
        PDF::AddPage();
        PDF::WriteHtml($html);
        PDF::Output('hello_world.pdf');


        // return 'helloworld pdf';
    }

    public function gen_pdf()
    {
        return PdfHelper::pdf_helloworld();
    }

}
