<?php

namespace Database\Seeders;

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
        $this->call(UsersTableSeeders::class);
        $this->call(ReviewSeeder::class);
        $this->call(PortfolioSeeder::class);
    }
}
