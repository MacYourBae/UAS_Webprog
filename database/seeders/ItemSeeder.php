<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => "Vegetable 1",
            'item_desc' => "Ini Sayur",
            'price' => 7000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 2",
            'item_desc' => "Ini Sayur",
            'price' => 5000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 3",
            'item_desc' => "Ini Sayur",
            'price' => 4500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 4",
            'item_desc' => "Ini Sayur",
            'price' => 6000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 5",
            'item_desc' => "Ini Sayur",
            'price' => 3500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 6",
            'item_desc' => "Ini Sayur",
            'price' => 8000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 7",
            'item_desc' => "Ini Sayur",
            'price' => 2500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 8",
            'item_desc' => "Ini Sayur",
            'price' => 4000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 9",
            'item_desc' => "Ini Sayur",
            'price' => 1500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 10",
            'item_desc' => "Ini Sayur",
            'price' => 3000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 11",
            'item_desc' => "Ini Sayur",
            'price' => 1000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 12",
            'item_desc' => "Ini Sayur",
            'price' => 3000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 13",
            'item_desc' => "Ini Sayur",
            'price' => 1500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 14",
            'item_desc' => "Ini Sayur",
            'price' => 2000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 15",
            'item_desc' => "Ini Sayur",
            'price' => 5000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 16",
            'item_desc' => "Ini Sayur",
            'price' => 5500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 17",
            'item_desc' => "Ini Sayur",
            'price' => 4000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 18",
            'item_desc' => "Ini Sayur",
            'price' => 7000
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 19",
            'item_desc' => "Ini Sayur",
            'price' => 1500
        ]);

        DB::table('items')->insert([
            'item_name' => "Vegetable 20",
            'item_desc' => "Ini Sayur",
            'price' => 3500
        ]);
    }
}
