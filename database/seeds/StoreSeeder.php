<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Store::create([
            'name' => 'Helfanza',
            'email' => "helfanza@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Margadana Tegal",
        ]);
        \App\Store::create([
            'name' => 'Nanda Alfaradis',
            'email' => "nanda@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Margadana Tegal",
        ]);
        \App\Store::create([
            'name' => 'Afif',
            'email' => "afif@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Bulakamba Brebes",
        ]);
        \App\Store::create([
            'name' => 'Iskandar Muda',
            'email' => "iskandar@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Bulakamba Brebes",
        ]);
    }
}
