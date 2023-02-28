<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
        ->insert(['name' => 'Admin',
                'email' => 'aldahirruizvaldez0809@gmail.com',
                'password' => bcrypt('Lmcarletto'),
                'created_at' => now(),
                'updated_at' => now()]);
        DB::table('users')
        ->insert(['name' => 'Admin',
                'email' => 'nataly.kippe1419.nk@gmail.com',
                'password' => bcrypt('Telecel1234'),
                'created_at' => now(),
                'updated_at' => now()]);
    }
}
