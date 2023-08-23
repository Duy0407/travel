<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class ApiCityController extends Controller
{
    public function getDistrictsByIdCity(Request $request)
    {
        $cityId = $request->get('cityId');
        $quanhuyens = City::where('cit_parent', $cityId)->get();
        return response()->json($quanhuyens);
    }
}
