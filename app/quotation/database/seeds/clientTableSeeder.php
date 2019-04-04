<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Client;

class clientTableSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = array(
            Faker\Factory::create('zh_TW'),
            Faker\Factory::create('en_HK'),
            Faker\Factory::create('zh_CN')
        );
    }

    public function get_random_brithday()
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

    public function get_random_update_at()
    {
        $min = strtotime("jan 1st -3 years");
        $max = strtotime("dec 31st -1 years");
        $time = rand($min,$max);
        return date('Y-m-d H:m:s', $time);
    }

    public function get_random_created_at()
    {
        $min = strtotime("jan 1st -3 years");
        $max = strtotime("dec 31st -1 years");
        $time = rand($min,$max);
        return date('Y-m-d H:m:s', $time);
    }

    public function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

    public function get_phone_number()
    {
        return $this->faker[0]->phoneNumber;
    }

    public function get_email()
    {
        return $this->faker[0]->email;
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

    public function get_address()
    {
        return $this->random_from_pool([
            null,
            '',
            $this->faker[0]->address,
            $this->faker[1]->address,
            $this->faker[2]->address
            ]);
    }

    public function get_client_cat()
    {
        return random_int(-1,5);
    }

    public function insert_client_record()
    {

        $client_cname = $this->faker[0]->name;
        $client_ename = $this->faker[1]->name;

        DB::table('client')->insert([
            'client_name' => $client_ename,
            'client_cname' => $client_cname,
            // 'client_cat' => $this->get_client_cat(),
            'client_whatsapp' => $this->get_phone_number(),
            'client_mobile' => $this->get_phone_number(),
            'client_address' => $this->get_address(),
            'client_email' => $this->get_email(),
            'client_gender' => $this->random_from_pool(['M','F']),
            'client_brithday' => $this->get_random_brithday(),
            'client_remarks' => $this->get_random_paragraph(10),
            'client_date' => $this->get_random_brithday(),
            'client_status' => $this->random_from_pool(array_keys(Client::$client_status_configuration)),
            'client_update_at' => $this->get_random_update_at(),
            'client_create_at' => $this->get_random_created_at(),
        ]);
    }


    public function run()
    {
        $max_num_client = 99999;
        DB::table('client')->truncate();
        for($i=0; $i < $max_num_client; $i++)
        {
            echo "\r";
            echo "inert client $i/$max_num_client";
            $this->insert_client_record();
        }
        echo "\n";
    }
}
