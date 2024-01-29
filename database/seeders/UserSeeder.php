<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'username' => 'zain55',
            'password' => Hash::make('123'),
            'name' => 'ZAIN ALI',
            'email' => 'rana@gmail.com',
        ]);


    }
}
