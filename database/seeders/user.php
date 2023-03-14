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
                'password' => bcrypt('  '),
                'created_at' => now(),
                'updated_at' => now()]);

        // DB::table('products')
        // ->insert(['code' => '123456',
        //         'name' => 'Nike Jordan',
        //         'buy_price' => 123,
        //         'minimum_price' => 234,
        //         'sale_price' => 345,
        //         'brand' => 'Nike',
        //         'qr_code' => 'Jordan',
        //         'qr_image' => 'Jordan',
        //         'image' => '12345',
        //         'colors' => 'Red',
        //         'size' => 'M',
        //         'description' => 'No tiene',
        //         'status' => 'Sold',
        //         'created_at' => now(),
        //         'updated_at' => now()]);
        // DB::table('products')
        // ->insert(['code' => '1234567',
        //         'name' => 'Nike Kobe',
        //         'buy_price' => 1234,
        //         'minimum_price' => 2345,
        //         'sale_price' => 3456,
        //         'brand' => 'Nike',
        //         'qr_code' => 'Jordan ',
        //         'qr_image' => 'Jorda1n',
        //         'image' => '123455',
        //         'colors' => 'Blue',
        //         'size' => 'M',
        //         'description' => 'No tiene x',
        //         'status' => 'OnSale',
        //         'created_at' => now(),
        //         'updated_at' => now()]);

        // DB::table('sales')
        // ->insert(['sold_in' =>4321,
        //         'sale_date' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'product_id' =>1]);
        //         DB::table('sales')
        // ->insert(['sold_in' =>5432,
        //         'sale_date' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'product_id' =>2]);
    }
}
