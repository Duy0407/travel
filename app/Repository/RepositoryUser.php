<?php

namespace App\Repository;
use App\Interface\InterfaceUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class RepositoryUser extends BaseRepository implements InterfaceUser
{
    protected Model $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
}

?>