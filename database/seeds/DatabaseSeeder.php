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
        $this->call(UsersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(InvestmentsTableSeeder::class);
        $this->call(MutualFundsTableSeeder::class);
        $this->command->info('Customers, Stocks, Investments, MutualFunds tables seeded');
    }
}
