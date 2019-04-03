<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColleaguesTableSeeder extends Seeder
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
        return $this->random_from_pool([null,'',$this->faker[0]->phoneNumber]);
    }

    public function get_email()
    {
        return $this->random_from_pool([null,'',$this->faker[0]->email]);
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

    public function get_colleagues_cat()
    {
        return random_int(-1,5);
    }

    public function insert_colleagues_record()
    {

        // var_dump($faker->name);
        // die();

        $colleagues_cname = $this->random_from_pool([null,'',$this->faker[0]->name]);
        $colleagues_ename = $this->faker[1]->name;

        DB::table('colleagues')->insert([
            'colleagues_name' => $colleagues_ename,
            'colleagues_contact' => Str::random(10).'@gmail.com',
            'colleagues_cat' => $this->get_colleagues_cat(),
            'colleagues_cname' => $colleagues_cname,
            'colleagues_ename' => $colleagues_ename,
            'colleagues_address' => $this->get_address(),
            'colleagues_contact' => Str::random(10),
            'colleagues_contact_tel' => $this->get_phone_number(),
            'colleagues_contact_mobile' => $this->get_phone_number(),
            'colleagues_contact_fax' => $this->get_phone_number(),
            'colleagues_contact_email' => $this->get_email(),
            // 'colleagues_relatedsales' => Str::random(10),
            // 'colleagues_cr_code' => Str::random(10),
            // 'colleagues_change_time' => Str::random(10),
            // 'colleagues_owner_name' => Str::random(10),
            'colleagues_remark' => Str::random(10),
            'colleagues_remark2' => Str::random(50),
            'colleagues_remark3' => Str::random(99),
            // 'colleagues_last_mod_user' => Str::random(10),
            // 'colleagues_creation_time' => Str::random(10),
            // 'colleagues_last_mod_time' => Str::random(10),
        ]);
    }

    public function run()
    {
        DB::table('colleagues')->delete();
        for($i=0; $i < 10; $i++)
        {
            $this->insert_colleagues_record();
        }
    }
}
