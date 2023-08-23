<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitiesServices extends Model
{
    use HasFactory;
    protected $table = 'tiennghi';
    protected $fillable = ['name_tiennghi',];
}
