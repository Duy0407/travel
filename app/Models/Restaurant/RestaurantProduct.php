<?php

namespace App\Models\restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantProduct extends Model
{
    use HasFactory;
    protected $table = 'restaurant_products';
    protected $fillable = [
        'id_category',
        'productName',
        'productPrice',
        'productAvatar',
        'productDescription',
    ];
}
