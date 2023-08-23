<?php

namespace App\Service\Restaurant;

use App\Interface\Restaurant\InterfaceRestaurant;

class ServiceRestaurant
{
   protected $repositoryRestaurant;
   
   public function __construct(InterfaceRestaurant $repositoryRestaurant)
   {
      $this->repositoryRestaurant = $repositoryRestaurant;
   }

   // Lấy danh sách loại hình kinh doanh
   public function getBusinessType()
   {
      return $this->repositoryRestaurant->allBusinessType();
   }

   // Lấy danh sách Món
   public function getCuisine()
   {
      return $this->repositoryRestaurant->allCuisine();
   }

   // Lấy danh sách thành phố
   public function getCity()
   {
      return $this->repositoryRestaurant->allCity();
   }

   // Tạo thông tin chung
   public function createRestaurant($request){

      $file = $request['restaurantAvatar'];
      $fileName = rand(0, 999). '.' . $file->getClientOriginalExtension();

      $data = [
         'id_business_type' => $request['typeRestaurant'],  
         'restaurant_name' => $request['name'],
         'service' => $request['service'],
         'cuisine' => $request['cuisine'],
         'avatar' => $fileName,
         'timeStart' => $request['timeStart'],
         'timeEnd' => $request['timeEnd'],
         'city' => $request['city'],
         'district' => $request['district'],
         'address' => $request['address'],
         'restaurantIntroduce' => $request['describe'],
      ];
      return $this->repositoryRestaurant->create($data);
   }
}
