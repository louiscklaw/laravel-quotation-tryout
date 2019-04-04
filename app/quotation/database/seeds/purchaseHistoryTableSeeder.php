<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Service;
use App\Package;
use App\Client;

class purchaseHistoryTableSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = array(
            Faker\Factory::create('zh_TW'),
            Faker\Factory::create('en_HK'),
            Faker\Factory::create('zh_CN')
        );
    }


    public function get_random_client($client_name_list)
    {
        $max_idx = $client_name_list->count() -1;
        return $client_name_list[random_int(0,$max_idx)]->client_name;
    }

    public function get_service_name_list()
    {
        $service_name_list = Service::distinct()->get(['service_name']);
        return $service_name_list;
    }

    public function get_package_name_list()
    {
        $package_name_list = Package::distinct()->get(['package_name']);
        return $package_name_list;
    }

    public function get_random_purchase_item_id($service_list, $package_list)
    {


        if (random_int(0,1) > 0.5)
        {
            return $service_list[random_int(0,sizeof($service_list)-1)]->service_name;
        }else{
            return $package_list[random_int(0,sizeof($package_list)-1)]->package_name;
        }
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

    public function get_random_date()
    {
        $min = strtotime("jan 1st -80 years");
        $max = strtotime("dec 31st -16 years");
        $time = rand($min,$max);
        $dob = date("Y-m-d",$time);

        // //Generate a timestamp using mt_rand.
        // $timestamp = mt_rand(1, time());

        // //Format that timestamp into a readable date string.
        // $randomDate = date("d M Y", $timestamp);

        //Print it out.
        return $dob;
    }

    public function insert_purchase_history_record($client_name_list, $service_list, $package_list)
    {
        DB::table('purchase_history')->insert([
            'purchase_history_client_name' => $this->get_random_client($client_name_list),
            // 'purchase_history_cat' => $this->get_purchase_history_cat(),
            'purchase_history_price' => random_int(10,1999),
            'purchase_history_item' => $this->get_random_purchase_item_id($service_list, $package_list),
            'purchase_history_date' => $this->get_random_date(),
            'purchase_history_remarks' => $this->get_random_paragraph(5),
        ]);
    }

    public function get_client_record()
    {
        return Client::distinct()->get(['client_name']);
    }

    public function run()
    {
        $client_name_list = $this->get_client_record();
        $service_list = $this->get_service_name_list();
        $package_list = $this->get_package_name_list();

        DB::table('purchase_history')->truncate();
        for($i=0; $i < 90000; $i++)
        {
            $this->insert_purchase_history_record($client_name_list, $service_list, $package_list);
            echo 'insert';
        }
    }
}
