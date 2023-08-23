@extends('KhachHang.master.master')
@section('title','Email Verification')
@section('content')
<div class="hunghabay_login_container_back">
    <div class="hunghabay_login_right hunghabay_search_account">
        <div class="onback_click d_flex align_c" onclick="history.back()">
            <img src="assets/images/icon/arrow-narrow-left.svg" alt="">
            <p class="font_w400 font_s16 color_gray9 line_h24 ml_8">Quay lại</p>
        </div>
        <div class="hunghabay_login_right_title text_c">
            <p class="font_w700 font_s40 line_h56 color_gray9">Nhập mã OTP</p>
        </div>
        
        <div class="otp_code_request">
            <p class="font_w400 font_s16 line_h24 color_474747 text_c">Mã xác thực gửi về Email {{ $authInfo['email'] }}</p>
        </div>
        <form action="{{ route('veryEmail') }}" method="POST" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
            @csrf
            <div class="hunghabay_login_input_otp">
                <div class="popup_accuracy_email_input">
                    <input type="text" class="confirmClass" id="digit-1" name="code[]" data-next="digit-2" maxlength="1">
                    <input type="text" class="confirmClass" id="digit-2" name="code[]" data-next="digit-3" data-previous="digit-1" maxlength="1">
                    <input type="text" class="confirmClass" id="digit-3" name="code[]" data-next="digit-4" data-previous="digit-2" maxlength="1">
                    <input type="text" class="confirmClass" id="digit-4" name="code[]" data-next="digit-5" data-previous="digit-3" maxlength="1">
                    <input type="text" class="confirmClass" id="digit-5" name="code[]" data-next="digit-6" data-previous="digit-4" maxlength="1">
                    <input type="text" class="confirmClass" id="digit-6" name="code[]" data-previous="digit-5" maxlength="1">
                </div>
            </div>

            <button type="submit" class="font_w500 font_s16 line_h20 color_white figButton bgCCC" disabled>XÁC NHẬN</button>

            <div class="hunghabay_login_request d_flex align_c mt_24 flex_center">
                <p class="font_w400 font_s16 line_h24 color_474747">Gửi lại mã xác thực</p>
                <img src="assets/images/icon/update_rotaion.svg" alt="" class="ml_8">
            </div>

            @if(session()->has('codeError'))
                <div class="color_red messageError">{{session()->get('codeError')}}</div>
            @endif
        </form>
    </div>
</div>
@endsection
