<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Portfolio::factory()
          ->count(6)
          ->create();
    }
}
