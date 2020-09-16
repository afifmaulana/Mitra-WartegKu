<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodDrink extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}
