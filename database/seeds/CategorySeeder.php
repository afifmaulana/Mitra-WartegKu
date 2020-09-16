<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Seafood',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Ayam',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Telor',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Sayur',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Gorengan',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 1,
            'category' => 'Minuman',
            'image' => 'picture.jpg',
            'is_food' => false
        ]);



        \App\Category::create([
            'store_id' => 2,
            'category' => 'Seafood',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 2,
            'category' => 'Ayam',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 2,
            'category' => 'Telor',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 2,
            'category' => 'Sayur',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 2,
            'category' => 'Gorengan',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 2,
            'category' => 'Minuman',
            'image' => 'picture.jpg',
            'is_food' => false
        ]);



        \App\Category::create([
            'store_id' => 3,
            'category' => 'Seafood',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 3,
            'category' => 'Ayam',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 3,
            'category' => 'Telor',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 3,
            'category' => 'Sayur',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 3,
            'category' => 'Gorengan',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 3,
            'category' => 'Minuman',
            'image' => 'picture.jpg',
            'is_food' => false
        ]);



        \App\Category::create([
            'store_id' => 4,
            'category' => 'Seafood',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 4,
            'category' => 'Ayam',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 4,
            'category' => 'Telor',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 4,
            'category' => 'Sayur',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 4,
            'category' => 'Gorengan',
            'image' => 'picture.jpg',
            'is_food' => true
        ]);
        \App\Category::create([
            'store_id' => 4,
            'category' => 'Minuman',
            'image' => 'picture.jpg',
            'is_food' => false
        ]);
    }
}
