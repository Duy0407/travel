<?php

namespace App\Http\Controllers\Restaurant;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Service\Restaurant\ServiceUserRestaurant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRestaurantController extends Controller
{
    protected $userService;

    public function __construct(ServiceUserRestaurant $userService)
    {
        $this->userService = $userService;
    }

    // View Login
    public function viewLogin()
    {
        return view('HopTac.Restaurant.Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session()->flush();
            if ($user->email_verified_at != NULL) {
                session()->put('loginSuccess', $user);
                return redirect()->route('restaurant.manager.dashboard');
            }else{
                session()->put('authInfo', $user);
                session()->put('expires_at', now()->addMinutes(10));
                return redirect()->route('viewEmail');
            }

        }else{
            return redirect()->back()->with('IncorrectInformation', 'Email hoặc mật khẩu không chính xác !');
        } 
    }

    // View Register
    public function viewRegister()
    {
        return view('HopTac.Restaurant.Register');
    }

    public function register(Request $request)
    {
        $email = User::where('email', $request->email)->first();
        if ($email) {
            return redirect()->back()->with('EmailAlreadyExists', 'Email đã tồn tại trên hệ thống!');
        }else{
            $user = $this->userService->register($request->all());
            session()->flush();
            session()->put('authInfo', $user);
            session()->put('expires_at', now()->addMinutes(10));
            return redirect()->route('viewEmail');
        }
    }

}
