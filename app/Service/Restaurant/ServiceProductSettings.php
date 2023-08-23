<?php
namespace App\Service\Restaurant;
use App\Interface\Restaurant\InterfaceProductSettings;

class ServiceProductSettings
{
    protected $bindingProductSettings;

    public function __construct(InterfaceProductSettings $bindingProductSettings,){
        $this->bindingProductSettings = $bindingProductSettings;
    }

    public function createProductSettings($request)
    {
        // $restaurantID = $request['idRestaurant'];
        // $categoryFile = $request['categoryAvatar'];
        // $categoryFileName = rand(0, 999). '.' . $categoryFile->getClientOriginalExtension();

        // $categoryData = [
        //     'id_restaurant' => $restaurantID,
        //     'categoryName' => $request['categoryName'],
        //     'categoryAvatar' => $categoryFileName,
        // ]; 
        // $categoryFile->move(public_path('uploads/restaurant/' . $restaurantID), $categoryFileName);

        // $category = $this->bindingProductSettings->create($categoryData);

        // $productData = [
        //     'id_category' => $category->id,
        //     'productName' => $request['categoryName'],
        // ];

            

        // return $this->bindingProductSettings->create($categoryData);

        // $valueProductJSON = $request['valueProduct'];
        // $valueProduct = json_decode($valueProductJSON, true);
        // foreach ($valueProduct as $productData) {
        //     echo $avatar = $productData['avatar'];
        // }

    }
}

?>