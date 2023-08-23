<?php

namespace App\Service\Restaurant;
// use App\Interface\Restaurant\InterfaceRestaurantUser;
use App\Interface\InterfaceUser;
use App\Interface\InterfaceUserInfo;
use Carbon\Carbon;
use Mail;


class ServiceUserRestaurant{
    protected $repoUser;
    protected $repoUserInfo;

    public function __construct(InterfaceUser $repoUser, InterfaceUserInfo $repoUserInfo)
    {
        $this->repoUser = $repoUser;
        $this->repoUserInfo = $repoUserInfo;
    }

    // Đăng ký
    public function register($request)
    {
        $confirmationCode = strval(mt_rand(100000, 999999));
        $timeNow = Carbon::now()->timestamp;

        $data = [
            'name' => $request['fullName'],
            'phone' => $request['phone'],
            'created_at' => $timeNow,
            'updated_at' => $timeNow,
        ];

        $userInfo = $this->repoUserInfo->create($data);

        $data2 = [
            'id_info' => $userInfo->id,
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'type' => 4,
            'confirmation_code' => $confirmationCode,
            'created_at' => $timeNow,
            'updated_at' => $timeNow,
        ];


        // $dataMerge = array_merge($data, $data2);

        // Mail::send('Mail.RigisterRestaurant', $dataMerge, function($message) use ($dataMerge) {
        //     $message->to($dataMerge['email'], $dataMerge['name'])->subject('Confirmation code');
        // });

        return $this->repoUser->create($data2);

    }
}


?>
