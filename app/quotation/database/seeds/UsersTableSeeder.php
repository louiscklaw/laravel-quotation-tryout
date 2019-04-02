<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

class UsersTableSeeder extends Seeder
{

    public function insert_record($user_id, $username, $password)
    {
        DB::table('users')->insert([
            'name' => $username,
            'email' => Str::random(10).'@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => bcrypt($password),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'disabled' => sharedSeeder::random_from_pool(User::$disabled_state)
        ]);
    }

    public function insert_test_user()
    {
        $this->insert_record(0,'test','test');
    }

    public function run()
    {
        DB::table('users')->truncate();
        $this->insert_test_user();
        foreach(range(1,10) as $user_id)
        {
            $this->insert_record($user_id, 'user'.$user_id, '123456');
        }


    }
}
