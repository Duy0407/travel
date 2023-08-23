<?php

namespace App\Http\Controllers\KhachHang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HopTacController extends Controller
{
    public function index(){
        return view('HopTac.HopTac');
    }
}
