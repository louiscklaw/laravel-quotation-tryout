<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function insert_record()
    {
        DB::table('client')->insert([
            'client_name' => 'louislaw',
            'client_contact' => Str::random(10).'@gmail.com',
            'client_cat' => Str::random(10),
            'client_name' => Str::random(10),
            'client_cname' => Str::random(10),
            'client_ename' => Str::random(10),
            'client_address' => Str::random(10),
            'client_contact' => Str::random(10),
            'client_contact_tel' => Str::random(10),
            'client_contact_mobile' => Str::random(10),
            'client_contact_fax' => Str::random(10),
            'client_contact_email' => Str::random(10),
            'client_relatedsales' => Str::random(10),
            'client_cr_code' => Str::random(10),
            'client_change_time' => Str::random(10),
            'client_owner_name' => Str::random(10),
            'client_remark' => Str::random(10),
            'client_remark2' => Str::random(10),
            'client_remark3' => Str::random(10),
            'client_last_mod_user' => Str::random(10),
            'client_creation_time' => Str::random(10),
            'client_last_mod_time' => Str::random(10),
        ]);
    }

    public function run()
    {
        for($i=0; $i < 999; $i++)
        {
            $this->insert_record();
        }
    }
}
