<?php
namespace App\Repository\Restaurant;
use App\Repository\BaseRepository;
use App\Interface\Restaurant\InterfaceTienNghiChinhSach;

use App\Models\Restaurant\AmenitiesServices;
use App\Models\Restaurant\RestaurantTTC;
use App\Models\Restaurant\TienNghiChinhSach;


class RepositoryTienNghiChinhSach extends BaseRepository implements InterfaceTienNghiChinhSach
{
    protected $amenitiesServices;
    protected $tienNghiChinhSach;

    public function __construct(
        AmenitiesServices $amenitiesServices,
        TienNghiChinhSach $tienNghiChinhSach
    )
    {
        $this->amenitiesServices = $amenitiesServices;
        $this->model = $tienNghiChinhSach;
    }

    // Danh sách tiên nghi & dịch vụ
    public function allAmenitiesServices()
    {
        return $this->amenitiesServices->get();
    }

    public function findIdRestaurant($id)
    {
        return RestaurantTTC::find($id);
    }

    // Update chính sách
    public function updatePolicy($id, array $data)
    {
        $record = $this->findIdRestaurant($id);
        if ($record) {
            $record->update($data);
            return true;
        }

        return false;
    }
    


}

?>