<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Service;
use App\Package;
use App\PriceList;
use App\Client;

class receiptTableSeeder extends Seeder
{

    public function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

    public function get_client_record()
    {
        return Client::distinct()->get(['client_name']);
    }

    public function get_random_client_record($client_name_list)
    {
        $max_idx = $client_name_list->count() -1;
        return $client_name_list[random_int(0,$max_idx)];
    }

    public function get_package_records()
    {
        $package_records = Package::all();
        return $package_records;
    }

    public function get_sentence()
    {
        $length = random_int(1,10);
        $words = [];
        $word_in_sentence = random_int(1,10);

        foreach(range(1,$word_in_sentence) as $i)
        {
            array_push($words, Str::random(random_int(3,10)));
        }

        $sentence = implode(' ', $words) . [',','.'][random_int(0,1)];

        return $sentence;
    }

    public function get_random_paragraph($repeat=10)
    {
        $sentence_array = [];

        foreach(range(1, $repeat) as $i)
        {
            array_push($sentence_array, $this->get_sentence());
        }

        return implode(' ', $sentence_array);
    }

    public function get_service_records()
    {
        $service_records = Service::all();
        return $service_records;
    }

    public function get_random_service_record()
    {
        $service_list = $this->get_service_records();
        return $service_list[random_int(0,sizeof($service_list)-1)];
    }

    public function get_random_package_record()
    {
        $package_list = $this->get_package_records();
        return $package_list[random_int(0,sizeof($package_list)-1)];
    }

    public function insert_receipt_item_record($receipt_master_receipt_number)
    {
        $random_qty = random_int(1,5);
        $random_unit_price = random_int(1,999);
        $random_total = $random_qty * $random_unit_price;

        DB::table('receipt_item')->insert([
            'receipt_master_receipt_number' => $receipt_master_receipt_number,
            'receipt_item_desc' => $this->get_random_paragraph(random_int(10,40)),
            'receipt_item_qty' => $random_qty,
            'receipt_item_unit_price' => $random_unit_price,
            'receipt_item_total' => $random_total
        ]);

        return array(
            $random_qty, $random_unit_price, $random_total
        );

    }

    public function insert_receipt_record($master_receipt_number, $client_name_list)
    {
        $random_client = $this->get_random_client_record($client_name_list);

        $subtotal = 0;
        $random_receiptitem= random_int(1,5);
        foreach(range(0,$random_receiptitem)  as $item_num)
        {
            $insert_result = $this->insert_receipt_item_record($master_receipt_number);
            $subtotal = $insert_result[2];
        }

        $subtotal = number_format((float)$subtotal, 2, '.', '');

        // discount in price_value
        $random_discount = number_format((float)random_int(0,500), 2, '.', '');
        $random_tax_in_pct =  number_format((float)random_int(0,5), 2, '.', '');
        $random_shipping_fee = number_format((float)random_int(0,100), 2, '.', '');
        $random_handling_fee = number_format((float)random_int(0,200), 2, '.', '');

        // $tax_price_value = $subtotal * $random_tax_in_pct;
        $tax_price_value = number_format((float)($subtotal * $random_tax_in_pct), 2, '.', '');

        $mobile = sprintf('+852 9%07d', random_int(1000000,9999999));

        $less_discount = $subtotal - $random_discount;
        $less_discount = number_format((float)$less_discount, 2, '.', '');


        DB::table('receipt')->insert([
            'receipt_client_name' => $random_client->client_name,
            'receipt_client_company_name'=>$random_client->client_name.'\'s company',
            'receipt_client_address' => $random_client->client_name.'\'s address',
            'receipt_client_phone_number' => $mobile,
            'receipt_client_email' => $random_client->client_email,

            'receipt_ship_to_name' => $random_client->client_name,
            'receipt_ship_to_company_name'=>$random_client->client_name.'\'s ship to company',
            'receipt_ship_to_address' => $random_client->client_address,
            'receipt_ship_to_phone_number' => $mobile,
            'receipt_ship_to_email' => $random_client->client_email,

            'receipt_master_receipt_number'=>$master_receipt_number,

            'receipt_subtotal' => $subtotal,
            'receipt_discount' => $random_discount,
            'receipt_subtotal_less_discount' => $less_discount,
            'receipt_tax' => $subtotal,
            'receipt_total_tax' => $tax_price_value,
            'receipt_shipping_fee' => $random_shipping_fee,
            'receipt_handling_fee' => $random_handling_fee,
            'receipt_paid' => $this->random_from_pool(['Y','N']),
            'recepipt_remarks' => $this->get_random_paragraph(30),
            'recepipt_notes' => $this->get_random_paragraph(10),
        ]);
    }



    public function check_price($service_name)
    {
        $price_list_records = PriceList::all();
        $output = 0;
        $price_list_length = $price_list_records->count();

        $output = $price_list_records[random_int(0,$price_list_length-1)]->price_list_price;

        return $output;
    }

    // public function insert_receipt_record($master_receipt_number)
    // {

    //     $service_records = $this->get_random_service_record();
    //     $package_records = $this->get_random_package_record();

    //     $price = 1;
    //     $qty=1;
    //     $subtotal=1;
    //     if (random_int(0,10)>5)
    //     {
    //         $price = $this->check_price($service_records->service_name);
    //     }else{
    //         $price = $this->check_price($package_records->package_name);
    //     }

    //     $qty = random_int(1,3);
    //     $subtotal = $price * $qty;

    //     DB::table('receipt_item')->insert([
    //         'receipt_item_desc' => $service_records->service_name,
    //         'receipt_item_qty' => $qty,
    //         'receipt_item_unit_price' => $price,
    //         'receipt_item_total' => $subtotal,
    //         'receipt_master_receipt_number'=>$master_receipt_number,
    //     ]);

    //     return $subtotal;
    // }

    public function run()
    {
        DB::table('receipt')->truncate();
        DB::table('receipt_item')->truncate();

        $client_name_list = $this->get_client_record();

        for($i=0; $i < 10000; $i++)
        {
            $master_receipt_number = sprintf('RECEIPT_%d', $i);
            $this->insert_receipt_record($master_receipt_number, $client_name_list);
            echo 'insert';
        }
    }
}
