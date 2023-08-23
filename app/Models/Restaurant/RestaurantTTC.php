<?php

namespace App\Models\restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantTTC extends Model
{
    use HasFactory;
    protected $table = 'restaurant1';
    protected $fillable = [
        'id_business_type',
        'restaurant_name',
        'service',
        'cuisine',
        'avatar',
        'timeStart',
        'timeEnd',
        'city',
        'district',
        'address',
        'restaurantIntroduce',
        'restaurantPolicy',
    ];
}
