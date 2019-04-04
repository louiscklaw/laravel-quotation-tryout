<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use joshtronic\LoremIpsum;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function insert_record()
    {
        $lipsum = new LoremIpsum();

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => $lipsum->sentences(random_int(1,99)),
            'visible' => rand(0,1),
            'author' => rand(1,10),
            'create_since' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }

    public function run()
    {
        DB::table('posts')->truncate();
        for($i=0; $i < 99; $i++)
        {
            $this->insert_record();
        }
    }
}
