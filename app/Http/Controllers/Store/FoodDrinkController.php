<?php

namespace App\Http\Controllers\Store;

use App\Category;
use App\FoodDrink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = FoodDrink::all();
        return view('pages.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = Category::all();
        return view('pages.food.create', compact('foods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_food=$request->file('image');
        $filename=time().'.'.$image_food->getClientOriginalExtension();
        $path=public_path('uploads/store');
        $image_food->move($path,$filename);

        $food = new FoodDrink();
        $food->store_id = Auth::guard('store')->user()->id;
        $food->category_id = $request->category_id;
        $food->name = $request->name;
        $food->description = $request->description;
        $food->image = $filename;
        $food->price = $request->price;
        $food->save();
        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
