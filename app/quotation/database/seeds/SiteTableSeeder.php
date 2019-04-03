<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteTableSeeder extends Seeder
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

    public function get_site_cat()
    {
        return random_int(-1,5);
    }

    public function insert_site_record()
    {

        // var_dump($faker->name);
        // die();

        $site_cname = $this->random_from_pool([null,'',$this->faker[0]->name]);
        $site_ename = $this->faker[1]->name;

        DB::table('site')->insert([
            'site_name' => $site_ename,
            'site_contact' => Str::random(10).'@gmail.com',
            'site_cat' => $this->get_site_cat(),
            'site_cname' => $site_cname,
            'site_ename' => $site_ename,
            'site_address' => $this->get_address(),
            'site_contact' => Str::random(10),
            'site_contact_tel' => $this->get_phone_number(),
            'site_contact_mobile' => $this->get_phone_number(),
            'site_contact_fax' => $this->get_phone_number(),
            'site_contact_email' => $this->get_email(),
            // 'site_relatedsales' => Str::random(10),
            // 'site_cr_code' => Str::random(10),
            // 'site_change_time' => Str::random(10),
            // 'site_owner_name' => Str::random(10),
            'site_remark' => Str::random(10),
            'site_remark2' => Str::random(50),
            'site_remark3' => Str::random(99),
            // 'site_last_mod_user' => Str::random(10),
            // 'site_creation_time' => Str::random(10),
            // 'site_last_mod_time' => Str::random(10),
        ]);
    }

    public function run()
    {
        DB::table('site')->delete();
        for($i=0; $i < 10; $i++)
        {
            $this->insert_site_record();
        }
    }
}
