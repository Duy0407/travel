<?php

namespace App\Repository;
use App\Interface\InterfaceUserInfo;
use App\Models\InfoUser;
use Illuminate\Database\Eloquent\Model;

class RepositoryUserInfo extends BaseRepository implements InterfaceUserInfo
{
    protected Model $model;

    public function __construct(InfoUser $model)
    {
        $this->model = $model;
    }
}
