<?php

namespace App\Interface;

interface InterfaceUser
{
    public function all();

    public function find(int $id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}

?>