<?php
namespace App\Service\Restaurant;
use App\Interface\Restaurant\InterfaceTienNghiChinhSach;

class ServiceTienNghiChinhSach
{
    protected $bindInterfaceRepository;
    public function __construct(
      InterfaceTienNghiChinhSach $bindInterfaceRepository,
    )
    {
      $this->bindInterfaceRepository = $bindInterfaceRepository;
    }

    // Lấy tiện nghi & dịch vụ
    public function getAmenitiesServices(){
        return $this->bindInterfaceRepository->allAmenitiesServices();
    }

    // Tạo tiện nghi & chính sách
    public function createAmenitiesServices($request)
    {
      $restaurantID = $request['idRestaurant'];
      $time = time();

      //Update Chính sách nhà hàng
      $updatePolicy = [
        'restaurantPolicy' => $request['policy'],
        'updated_at' => $time,
      ];

      $arrayValues = explode(',', $request['arrayValues']);
      foreach($arrayValues as $arrayValue){
        $data = [
            'id_restaurant' => $restaurantID,
            'id_tiennghi' => $arrayValue,
        ];
        $this->bindInterfaceRepository->create($data);
      };

      return $this->bindInterfaceRepository->updatePolicy($restaurantID, $updatePolicy);
    }

}


?>