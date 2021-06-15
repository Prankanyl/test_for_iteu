<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::factory()
          ->count(5)
          ->create();
        // DB::table('users')->insert([
        //   'name' => Str::random(10),
        //   'email' => Str::random(10).'@gmail.com',
        //   'password' => Hash::make('password'),
        //   'remember_token' => Str::random(10),
        // ]);
    }
}
