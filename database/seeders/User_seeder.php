<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class User_seeder extends Seeder
{
    public function run(): void
    {
        DB::table("users")->insert([[
            'name' => 'Ramesh Sharma',
            'email' => 'r@g.com',
            'password' => Hash::make('Ramesh123')
        ],[
            'name' => 'Shahid Sharma',
            'email' => 's@g.com',
            'password' => Hash::make('Shahid123')
        ],[
            'name' => 'Lokesh Sharma',
            'email' => 'l@g.com',
            'password' => Hash::make('Shahid123')
        ]]);
    }
}
