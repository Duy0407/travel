<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLoginController extends Controller
{
    public $successStatus = 200;
    public function login(Request $request){
       $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'error' => 'Thông tin lỗi'
            ], 401);
        }else{
            $user = Auth::user();
            $token = $user->createToken('ApiToken')->accessToken;
            return response()->json([
                'success' => $token,
                'token_type' => 'Bearer',
            ], $this->successStatus);
        }
    }
}
