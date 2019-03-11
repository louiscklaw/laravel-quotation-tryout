<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class usersTableSeeder extends Seeder
{
    public function insert_user($user_name, $user_password)
    {
        DB::table('users')->insert([
            'name' => $user_name,
            'email' => "$user_name@example.com",
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => bcrypt($user_password),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
    public function run()
    {
        $this->insert_user('test','123456');
    }
}
