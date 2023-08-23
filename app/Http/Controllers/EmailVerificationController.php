<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ServiceUser;

class EmailVerificationController extends Controller
{

    protected $userService;
    public function __construct(ServiceUser $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $expires_at = session('expires_at');
        
        if ($expires_at && now()->gt($expires_at)) {
            session()->forget('authInfo');
            session()->forget('expires_at');
        }
        
        return view('EmailVerification')->with('authInfo', session('authInfo'));
    }

    public function veryEmail(Request $request)
    {
        $authInfo = session('authInfo');
        $code = implode('', $request['code']);
        $id = intval($authInfo->id);
        if ($authInfo->confirmation_code === $code) {
            $this->userService->xacThucMail($id);
            session()->flush();
            if ($authInfo->type == 4) {
                return redirect()->route('loginRestaurant')->with('veryEmailSuccess', 'Xác thực email thành công');
            }
        }else{
            return redirect()->back()->with('codeError', 'Mã xác thực không chính xác');
        }
    }
}
