<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(clientTableSeeder::class);
        $this->call(packageTableSeeder::class);
        $this->call(serviceTableSeeder::class);



        $this->call(priceListTableSeeder::class);
        $this->call(purchaseHistoryTableSeeder::class);
        $this->call(receiptTableSeeder::class);



    }
}
