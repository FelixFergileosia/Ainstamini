<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Harris',
            'email' => 'harris@gmail.com',
            'password' => bcrypt('12345'),
            'phone_number' => '082285301199',
            'bio' => 'I am an athlete',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);

        DB::table('users')->insert([
            'username' => 'Felix',
            'email' => 'felix@gmail.com',
            'password' => bcrypt('12345'),
            'phone_number' => '081377889900',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
