<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{

    public function __construct()
    {
        $this->faker = array(
            Faker\Factory::create('zh_TW'),
            Faker\Factory::create('en_HK'),
            Faker\Factory::create('zh_CN')
        );
    }

    public function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

    public function get_phone_number()
    {
        // $this->random_from_pool([null,'',$this->faker[0]->phoneNumber])
        return $this->faker[0]->phoneNumber;
    }

    public function get_email()
    {
        return $this->faker[0]->email;
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

        // var_dump($faker->name);
        // die();

        $client_cname = $this->faker[0]->name;
        $client_ename = $this->faker[1]->name;

        DB::table('client')->insert([
            'client_name' => $client_ename,
            'client_contact' => Str::random(10).'@gmail.com',
            'client_cat' => $this->get_client_cat(),
            'client_cname' => $client_cname,
            'client_ename' => $client_ename,
            'client_address' => $this->get_address(),
            'client_contact' => Str::random(10),
            'client_contact_tel' => $this->get_phone_number(),
            'client_contact_mobile' => $this->get_phone_number(),
            'client_contact_fax' => $this->get_phone_number(),
            'client_contact_email' => $this->get_email(),
            // 'client_relatedsales' => Str::random(10),
            // 'client_cr_code' => Str::random(10),
            // 'client_change_time' => Str::random(10),
            // 'client_owner_name' => Str::random(10),
            'client_remark' => Str::random(10),
            'client_remark2' => Str::random(50),
            'client_remark3' => Str::random(99),
            // 'client_last_mod_user' => Str::random(10),
            // 'client_creation_time' => Str::random(10),
            // 'client_last_mod_time' => Str::random(10),
        ]);
    }

    public function run()
    {
        DB::table('client')->delete();
        for($i=0; $i < 10; $i++)
        {
            $this->insert_client_record();
        }
    }
}
