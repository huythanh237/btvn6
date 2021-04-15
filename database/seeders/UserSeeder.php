<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

// use Illuminate\Database\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        User::factory()->count(200)->create();
    }
}
