<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Service\Restaurant\ServiceRestaurant;
use Illuminate\Http\Request;

class HomeRestaurantController extends Controller
{
    protected $serviceRestaurant;

    public function __construct(ServiceRestaurant $serviceRestaurant)
    {
        $this->serviceRestaurant = $serviceRestaurant;
    }

    public function index()
    {
        $businessType = $this->serviceRestaurant->getBusinessType();
        $cuisines = $this->serviceRestaurant->getCuisine();
        return view('HopTac.Restaurant.RestaurantHome', compact('businessType'));
    }
}
