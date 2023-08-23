<?php

namespace App\Http\Controllers\KhachHang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeTravelController extends Controller
{
    public function index(){
        return view('KhachHang.HomeTravel');
    }
}
