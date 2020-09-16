<?php

use Illuminate\Database\Seeder;

class FoodDrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 1,
            'name' => 'Ikan Pari Pedas',
            'description' => 'Dari ikan pilihan terbaik',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 1,
            'name' => 'Ikan Merah Kecap',
            'description' => 'Dari ikan pilihan terbaik',
            'image' => 'sample.jpg',
            'price' => '6000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 1,
            'name' => 'Sangrai Kerang',
            'description' => 'Dari Kerang terbaik',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 1,
            'name' => 'Cumi Masak',
            'description' => 'Tidak Amis',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);



        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 2,
            'name' => 'Opor Ayam',
            'description' => 'Dijamin enak',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 2,
            'name' => 'Ayam Kecap',
            'description' => 'Dijamin enak',
            'image' => 'sample.jpg',
            'price' => '6000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 2,
            'name' => 'Ayam Serundeng',
            'description' => 'Dijamin Enak',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);


        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 3,
            'name' => 'Telur Ceplok',
            'description' => 'Dijamin enak',
            'image' => 'sample.jpg',
            'price' => '3000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 3,
            'name' => 'Telor Rendang',
            'description' => 'Dijamin enak',
            'image' => 'sample.jpg',
            'price' => '6000',
        ]);
        \App\FoodDrink::create([
            'store_id' => 1,
            'category_id' => 3,
            'name' => 'Telor Kecap',
            'description' => 'Dijamin Enak',
            'image' => 'sample.jpg',
            'price' => '5000',
        ]);
    }
}
