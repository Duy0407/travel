<?php

namespace App\Interface\Restaurant;

interface InterfaceRestaurant
{
    public function all();

    public function find(int $id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    //-----------------------------------------

    public function allBusinessType();
    
    public function allCuisine();

    public function allCity();
}
