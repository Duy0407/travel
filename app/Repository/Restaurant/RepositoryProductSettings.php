<?php
namespace App\Repository\Restaurant;
use App\Repository\BaseRepository;
use App\Interface\Restaurant\InterfaceProductSettings;

use App\Models\Restaurant\RestaurantProductCategory;
use App\Models\Restaurant\RestaurantProduct;

class RepositoryProductSettings extends BaseRepository implements InterfaceProductSettings
{
    protected $productSettings;
    protected $productModel;

    public function __construct(
        RestaurantProductCategory $productSettings,
        RestaurantProduct $productModel,
    )
    {
        $this->model = $productSettings;
        $this->productModel = $productModel;
    }

    public function createProduct($data)
    {
        $this->productModel->create($data);
    }
}

?>