<?php

namespace App\Http\Controllers\restaurant\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Restaurant\ServiceRestaurant;
use App\Service\Restaurant\ServiceTienNghiChinhSach;
use App\Service\Restaurant\ServiceProductSettings;

class AddRestaurantController extends Controller
{   
    protected $serviceRestaurant;
    protected $serviceTienNghiChinhSach;
    protected $serviceProductSettings;

    public function __construct(
        ServiceRestaurant $serviceRestaurant,
        ServiceTienNghiChinhSach $serviceTienNghiChinhSach,
        ServiceProductSettings $serviceProductSettings,
    ){
        $this->serviceRestaurant = $serviceRestaurant;
        $this->serviceTienNghiChinhSach = $serviceTienNghiChinhSach;
        $this->serviceProductSettings = $serviceProductSettings;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->serviceRestaurant->createRestaurant($request->all());
    }

    public function saveAmenitiesPolicy(Request $request)
    {
        return $this->serviceTienNghiChinhSach->createAmenitiesServices($request->all());
    }

    public function saveProductSettings(Request $request)
    {
        return $this->serviceProductSettings->createProductSettings($request->all());
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
