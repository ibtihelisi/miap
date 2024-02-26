<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ajouter un admin avec des donnes spécifique
        DB::Table('users')->insert(
            ['name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456789'),
            'role'=>'admin'

            ]
        );
    }
}
