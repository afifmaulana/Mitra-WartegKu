<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categorys = Category::all();
        return response()->json([
            'message' => 'Berhasil Menampilkan Category',
            'status' => true,
            'data' => CategoryResource::collection($categorys),
        ]);
    }

    public function FoodCategory()
    {
        $categorys = Category::where('is_food', true)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Category',
            'status' => true,
            'data' => CategoryResource::collection($categorys),
        ]);
    }


    public function DrinkCategory()
    {
        $categorys = Category::where('is_food', false)->get();
        return response()->json([
            'message' => 'Berhasil Menampilkan Category',
            'status' => true,
            'data' => CategoryResource::collection($categorys),
        ]);
    }


}
