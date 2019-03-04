<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function insert_record($user_id)
    {
        DB::table('users')->insert([
            'name' => 'user'.$user_id,
            'email' => Str::random(10).'@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => '$2y$10$HpQSbKcfgyRy2JdqjVCzt.bZyxd5/iIXJWT2erzyeGZm3STMvGx7i',
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
    public function run()
    {
        DB::table('users')->truncate();
        foreach(range(0,99) as $user_id)
        {
            $this->insert_record($user_id);
        }
    }
}
