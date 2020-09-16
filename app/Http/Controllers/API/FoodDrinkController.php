<?php

namespace App\Http\Controllers\API;

use App\FoodDrink;
use App\Http\Controllers\Controller;
use App\Http\Resources\FoodDrinkResource;
use App\Http\Resources\StoreResource;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FoodDrinkController extends Controller
{
    public function StoreCategory($category_id)
    {
        $foods = FoodDrink::where('category_id', $category_id)->get();
        $result = [];
        foreach ($foods as $food) {
            array_push($result,$food->store);
        }
        return response()->json([
            'message' => 'Berhasil Menampilkan Store',
            'status' => true,
            'data' => StoreResource::collection($result)
        ]);

    }

    public function FoodStore($store_id)
    {
        $foods = FoodDrink::where('store_id', $store_id)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Food',
            'status' => true,
            'data' => FoodDrinkResource::collection($foods)
        ]);
    }

    public function showFoodLatest()
    {
        $foods = FoodDrink::orderBy('created_at')->take(4)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Food Terbaru',
            'status' => true,
            'data' => $foods
        ]);
    }

}
