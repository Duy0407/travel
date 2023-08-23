@extends('HopTac.master.master')
@section('title','Đăng ký nhà hàng')
@section('content')
    <div class="dang_nhap-content">
        <div class="dang_nhap-content-padding">

            <div class="dang_nhap-content-noidung">
                <div class="dang_nhap-content-noidung-left">
                    <img src="assets/images/restaurant/ImgLoginRestaurant.png" alt="">
                    <div class="absolute-dkdn">
                        <div class="absolute-dkdn-padding">
                            <div class="absolute-dkdn-sub">
                                <div class="absolute-dkdn-sub-text">Bạn đã có tài khoản?</div>
                                <a href="{{route('loginRestaurant')}}" class="absolute-dkdn-sub-btn">
                                    <div class="absolute-dkdn-sub-btn-text">Đăng nhập</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dang_nhap-content-noidung-right">
                    <div class="dang_nhap-content-noidung-right-padding-scroll">
                        <div class="dang_nhap-content-noidung-right-padding">
                            <div class="dang_nhap-content-noidung-right-title">Đăng ký</div>
                            <form id="RestaurantRegister" method="POST" action="{{route('getRegisterRestaurant')}}">
                                @csrf
                                <div class="dang_nhap-content-noidung-right-nhap">
                                    <div class="dang_nhap-content-noidung-right-email position_r parentInput">
                                        <input type="text" placeholder="Email *" name="email">
                                    </div>
                                    
                                    <div class="dang_nhap-content-noidung-right-pass position_r parentInput dk">
                                        <input type="password" placeholder="Mật khẩu *" name="password" id="mk1">
                                        <div class="eyg_img click_eyg">
                                            <img src="assets/images/icon/eye_black.svg" alt="" class="show_eyg">
                                            <img src="assets/images/icon/eye_off.svg" alt="" class="hidden">
                                        </div>
                                    </div>
                                    <div class="dang_nhap-content-noidung-right-pass position_r parentInput dk">
                                        <input type="password" placeholder="Nhập lại mật khẩu *" name="password_confirm">
                                        <div class="eyg_img click_eyg2">
                                            <img src="assets/images/icon/eye_black.svg" alt="" class="show_eyg">
                                            <img src="assets/images/icon/eye_off.svg" alt="" class="hidden">
                                        </div>
                                    </div>
                                    <div class="dang_nhap-content-noidung-right-pass position_r parentInput dk">
                                        <input type="text" placeholder="Họ và tên *" name="fullName">
                                    </div>
                                    <div class="dang_nhap-content-noidung-right-pass parentInput dk">
                                        <input type="number" placeholder="Số điện thoại liên hệ *" name="phone">
                                        <p class="check_phone color_red font_s12 line_h18 font_w500 font_st_i"></p>
                                    </div>

                                    <button type="submit" id="btnRegister" class="dang_nhap-content-noidung-right-btn">ĐĂNG KÝ</button>
                                    <a href="{{route('loginRestaurant')}}" class="dang_nhap-content-noidung-right-link text_blue">Đăng Nhập</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(session()->has('EmailAlreadyExists'))
        <div class="popupErrorEmail show">
            <div class="popupErrorEmail-padding">
                <span class="line-red"></span>
                <span class>Email đã tồn tại trên hệ thống!</span>
            </div>
        </div>
    @endif

@endsection