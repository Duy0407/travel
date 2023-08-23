<?php

namespace App\Models\restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantProductCategory extends Model
{
    use HasFactory;
    protected $table = 'restaurant_category';
    protected $fillable = [
        'id_restaurant',
        'categoryName',
        'categoryAvatar',
    ];
}
