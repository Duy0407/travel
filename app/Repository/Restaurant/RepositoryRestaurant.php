<?php

namespace App\Repository\Restaurant;
use App\Models\Restaurant\BusinessType;
use App\Models\Restaurant\Cuisine;
use App\Models\City;
use App\Repository\BaseRepository;
use App\Interface\Restaurant\InterfaceRestaurant;

use App\Models\restaurant\RestaurantTTC;

class RepositoryRestaurant extends BaseRepository implements InterfaceRestaurant
{
    protected $businessType;
    protected $cuisine;
    protected $city;
    protected $restaurant;

    public function __construct(
        BusinessType $businessType,
        Cuisine $cuisine,
        City $city,
        RestaurantTTC $restaurant,
    )
    {
        $this->businessType = $businessType;
        $this->cuisine = $cuisine;
        $this->city = $city;
        $this->model = $restaurant;
    }

    // Loại hình kinh doanh
    public function allBusinessType()
    {
        return $this->businessType->where('type', 1)->get();
    }

    // Danh sách ẩm thực
    public function allCuisine()
    {
        return $this->cuisine->get();
    }

    // Danh tất cả thành phố
    public function allCity()
    {
        return $this->city->where('cit_parent', 0)->get();
    }

}
