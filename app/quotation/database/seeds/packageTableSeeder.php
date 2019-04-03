<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Package;

class packageTableSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = array(
            Faker\Factory::create('zh_TW'),
            Faker\Factory::create('en_HK'),
            Faker\Factory::create('zh_CN')
        );
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

    public function get_available_service_id()
    {
        $service_id = DB::table('service')->distinct('id')->get();
        return $service_id;
    }

    public function get_random_service()
    {
        echo 'get_random_service';
        $services = $this->get_available_service_id();

        $target_service = $services[random_int(0,$services->count()-1)];

        return $target_service;
    }

    public function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

    public function random_service_included()
    {
        $current_service_list = [];
        // $service_ids = $this->get_available_service_id();
        // $number_of_service = random_int(1,3);
        // foreach(range(0,$number_of_service) as $i)
        // {
        //     $current_service_list[ $this->get_random_service()->id]='';
        // }
        $current_service_list[random_int(0,100)]='';
        echo 'done';
        return implode(' ', array_keys($current_service_list));
    }

    public function get_random_udpate_at()
    {
        $min = strtotime("jan 1st -3 years");
        $max = strtotime("dec 31st -1 years");
        $time = rand($min,$max);
        $dob = date("Y-m-d",$time);

        // //Generate a timestamp using mt_rand.
        // $timestamp = mt_rand(1, time());

        // //Format that timestamp into a readable date string.
        // $randomDate = date("d M Y", $timestamp);

        //Print it out.
        return $dob;
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

    public function get_random_price()
    {
        return random_int(10,999);
    }

    public function get_email()
    {
        return $this->random_from_pool([null,'',$this->faker[0]->email]);
    }

    public function get_random_package_status()
    {
        $package_list = array_keys(Package::$package_status_configuration);
        $package_list_length= sizeof($package_list);
        return $package_list[random_int(0,$package_list_length-1)];
    }

    public function insert_package_record($package_name)
    {
        DB::table('package')->insert([
            'package_name' => $package_name,
            'package_services_included' => $this->random_service_included(),

            'package_price' => $this->get_random_price(),
            'package_remarks' => $this->get_random_paragraph(5),
            'package_desc' => $this->get_random_paragraph(10),
            'package_disabled' => $this->random_from_pool(['Y','N']),
            'package_criteria' => $this->get_random_date(),
            'package_available_since' => $this->get_random_date(),
            'package_status' => $this->get_random_package_status(),
            'package_updated_at'=>$this->get_random_udpate_at(),
        ]);
    }

    public function run()
    {
        DB::table('package')->truncate();
        for($i=0; $i < 30; $i++)
        {
            $this->insert_package_record('package_combination_'.(string) $i);
        }
    }
}
