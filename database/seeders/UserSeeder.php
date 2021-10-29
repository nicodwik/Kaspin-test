<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => "nico dwi k",
            'email' => 'nico@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
    }
}
