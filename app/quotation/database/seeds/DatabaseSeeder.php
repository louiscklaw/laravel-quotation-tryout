<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(clientTableSeeder::class);
        $this->call(packageTableSeeder::class);
        $this->call(serviceTableSeeder::class);
        $this->call(QuotTableSeeder::class);

        // $this->call(priceListTableSeeder::class);
        // $this->call(purchaseHistoryTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
