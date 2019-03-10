<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
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

    public function get_company_cat()
    {
        return random_int(-1,5);
    }

    public function insert_company_record()
    {

        // var_dump($faker->name);
        // die();

        $company_cname = $this->random_from_pool([null,'',$this->faker[0]->name]);
        $company_ename = $this->faker[1]->name;

        DB::table('company')->insert([
            'company_name' => $company_ename,
            'company_contact' => Str::random(10).'@gmail.com',
            'company_cat' => $this->get_company_cat(),
            'company_cname' => $company_cname,
            'company_ename' => $company_ename,
            'company_address' => $this->get_address(),
            'company_contact' => Str::random(10),
            'company_contact_tel' => $this->get_phone_number(),
            'company_contact_mobile' => $this->get_phone_number(),
            'company_contact_fax' => $this->get_phone_number(),
            'company_contact_email' => $this->get_email(),
            // 'company_relatedsales' => Str::random(10),
            // 'company_cr_code' => Str::random(10),
            // 'company_change_time' => Str::random(10),
            // 'company_owner_name' => Str::random(10),
            'company_remark' => Str::random(10),
            'company_remark2' => Str::random(50),
            'company_remark3' => Str::random(99),
            // 'company_last_mod_user' => Str::random(10),
            // 'company_creation_time' => Str::random(10),
            // 'company_last_mod_time' => Str::random(10),
        ]);
    }

    public function run()
    {
        DB::table('company')->delete();
        for($i=0; $i < 10; $i++)
        {
            $this->insert_company_record();
        }
    }
}
