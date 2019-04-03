<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Service;
use App\Package;

class priceListTableSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = array(
            Faker\Factory::create('zh_TW'),
            Faker\Factory::create('en_HK'),
            Faker\Factory::create('zh_CN')
        );
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

    public function get_random_target_id($service_list, $package_list)
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

    public function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

    public function insert_price_list_record($price_list_name, $service_list, $package_list)
    {
        DB::table('price_list')->insert([
            'price_list_name' => $price_list_name,
            'price_list_object' => $this->random_from_pool(['service','package']),
            // 'price_list_cat' => $this->get_price_list_cat(),
            'price_list_target_id' => $this->get_random_target_id($service_list, $package_list),
            'price_list_price' => random_int(10,1999),
            'price_list_desc' => $this->get_random_paragraph(10),
            'price_list_remarks' => $this->get_random_paragraph(30),
            'price_list_disabled' => $this->random_from_pool(['Y','N']),
            'price_list_criteria' => $this->get_sentence(),
            'price_list_available_since' => $this->get_random_date()
        ]);
    }

    public function run()
    {
        $service_list = $this->get_service_name_list();
        $package_list = $this->get_package_name_list();
        DB::table('price_list')->truncate();
        for($i=0; $i < 30000; $i++)
        {
            $this->insert_price_list_record('price_list '.(string) $i, $service_list, $package_list);
            echo 'insert';
        }
    }
}
