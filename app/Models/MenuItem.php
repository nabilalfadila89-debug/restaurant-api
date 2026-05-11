<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FoodCategory;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'price',
        'is_available',
        'food_category_id'
    ];

    public function foodCategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}