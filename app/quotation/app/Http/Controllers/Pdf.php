<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Quot;

use PDF;

class pdf_helloworld{

}

class PdfHelper
{

    public static function get_client_table_html($id)
    {
        $client_record = Client::where('id',$id)->get();

        // $replace_config = array(
        //     '<--client_name-->'=> $client_record->name,
        //     '<--quotation_date-->' =>
        // );

$html=<<<EOF
<style>
    .item_name {
        width: 15%;
        font-size: 10pt;
        valign: middle;
    }

    .item_value {
        width: 35%;
        text-align: center;
    }
</style>
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td class="item_name"><div style="padding: 10px;">Name</div></td>
        <td class="item_value">&&client_name&&</td>
        <td class="item_name">Date:</td>
        <td class="item_value">&&quotation_date&&</td>
    </tr>
    <tr>
        <td class="item_name">Addr</td>
        <td class="item_value">&&client_addr&&</td>
        <td class="item_name">Quotation #</td>
        <td class="item_value">&&quotation_number&&</td>
    </tr>
</table>
EOF;

        // echo $html;
        // die();

        // return 'helloworld pdf';


        return $html;
    }

    public static function get_work_description($quot_id)
    {
$html=<<<EOF

EOF;

        return $html;
    }


    public function pdf_helloworld()
    {
        return 'hellopdf';

        $html = $this->get_client_table_html(1);

        $html = $html . $this->get_work_description(1);

        // $html = 'helloworld';

        // echo $html;
        // die();

        // return 'helloworld pdf';
        // PDF::AddPage();
        // PDF::writeHTML($html, true, false, false, false, '');
        // PDF::Output('example_048.pdf', 'I');
        // $pdf = new ;

        // if($request->has('download')){
        $pdf = PDF::loadView('pdfview');
        return $pdf->download('pdfview.pdf');
        // }


        // return view('pdfview');
    }

    public function gen_pdf()
    {
        return 'hellopdf';
    }

}

class PdfController extends Controller
{
    public function pdfview($quot_id)
    {
        // $items = DB::table("items")->get();
        // view()->share('items',$items);
        $quot_record = Quot::where('id',$quot_id)->get();
        $client_id = $quot_record[0]->quot_client_id;


        $client_record = Client::where('id',$client_id)->get();

        // if($request->has('download')){
        $pdf = PDF::loadView('pdfview',[
            'client_record'=>$client_record[0],
            'quot_record'=>$quot_record[0],
            ]);
        $pdf->setPaper('A4');

        return $pdf->stream('pdfview.pdf');
    }

    public function htmlview()
    {
        // $items = DB::table("items")->get();
        // view()->share('items',$items);


        // if($request->has('download')){

        $pdf = PDF::loadView('pdfview');
        $pdf->setPaper('A4');

        return view('pdfview');
    }


}
