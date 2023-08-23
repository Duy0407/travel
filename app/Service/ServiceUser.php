<?php
namespace App\Service;
use App\Interface\InterfaceUser;
use App\Interface\InterfaceUserInfo;
use Carbon\Carbon;

class ServiceUser
{
    protected $repoUser;
    protected $repoUserInfo;

    public function __construct(InterfaceUser $repoUser, InterfaceUserInfo $repoUserInfo)
    {
        $this->repoUser = $repoUser;
        $this->repoUserInfo = $repoUserInfo;
    }

    public function getUser($id)
    {
        return $this->repoUser->find($id);
    }

    public function getUserInfo()
    {
        return $this->repoUserInfo->all();
    }



    public function xacThucmail($id)
    {
        $timeNow = Carbon::now()->timestamp;
        $data = [
            'email_verified_at' => $timeNow,
        ];
        return $this->repoUser->update($id, $data);
    }
}

?>