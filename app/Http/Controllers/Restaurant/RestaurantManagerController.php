<?php

namespace App\Http\Controllers\Restaurant;

use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Controllers\Controller;
use App\Service\ServiceUser;
use App\Service\Restaurant\ServiceRestaurant;
use App\Service\Restaurant\ServiceTienNghiChinhSach;

class RestaurantManagerController extends Controller
{
    protected $serviceRestaurant;
    protected $serviceUser;
    protected $serviceTienNghiChinhSach;

    public function __construct(
        ServiceRestaurant $serviceRestaurant,
        ServiceUser $serviceUser,
        ServiceTienNghiChinhSach $serviceTienNghiChinhSach
    )
    {
        $this->serviceRestaurant = $serviceRestaurant;
        $this->serviceUser = $serviceUser;
        $this->serviceTienNghiChinhSach = $serviceTienNghiChinhSach;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //***** Thông tin User *****
        $idU = session('loginSuccess')->id;
        $user = $this->serviceUser->getUser($idU);
        return view('HopTac.Restaurant.RestaurantManager', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //***** Thông tin User *****
        $idU = session('loginSuccess')->id;
        $user = $this->serviceUser->getUser($idU);

        // loại hình kinh doanh
        $businessType = $this->serviceRestaurant->getBusinessType();

        // ẩm thực
        $cuisines = $this->serviceRestaurant->getCuisine();

        // thành phố
        $citys = $this->serviceRestaurant->getCity();

        // tiện nghi, dịch vụ
        $amenitiesServices = $this->serviceTienNghiChinhSach->getAmenitiesServices();
        return view('HopTac.Restaurant.RestaurantCreate',
            compact(
                'businessType',
                'cuisines',
                'citys',
                'user',
                'amenitiesServices',
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
