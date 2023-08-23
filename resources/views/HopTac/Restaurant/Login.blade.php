@extends('HopTac.master.master')
@section('title','Đăng nhập nhà hàng')
@section('content')
    <div class="dang_nhap-content">
        <div class="dang_nhap-content-padding">

            <div class="dang_nhap-content-noidung">
                <div class="dang_nhap-content-noidung-left">
                    <img src="assets/images/restaurant/ImgLoginRestaurant.png" alt="">
                    <div class="absolute-dkdn">
                        <div class="absolute-dkdn-padding">
                            <div class="absolute-dkdn-sub">
                                <div class="absolute-dkdn-sub-text">Bạn chưa có tài khoản? </div>
                                <a href="{{route('registerRestaurant')}}" class="absolute-dkdn-sub-btn">
                                    <div class="absolute-dkdn-sub-btn-text">Đăng ký</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dang_nhap-content-noidung-right">
                    <div class="dang_nhap-content-noidung-right-padding">
                        <div class="dang_nhap-content-noidung-right-title">Đăng nhập hệ thống</div>
                        <p class="check_email_pass color_red font_s12 line_h18 font_w500 font_st_i"></p>
                        <form id="RestaurantLogin" method="POST" action="{{route('getLoginRestaurant')}}">
                            @csrf
                            <div class="dang_nhap-content-noidung-right-nhap">
                                <div class="dang_nhap-content-noidung-right-email add_error parentInput">
                                    <input type="text" placeholder="Email hoặc số điện thoại *" name="email">
                                </div>

                                <div class="dang_nhap-content-noidung-right-pass parentInput">
                                    <input type="password" placeholder="Mật khẩu *" name="password">
                                    <div class="eyg_img click_eyg">
                                        <img src="assets/images/icon/eye_black.svg" alt="" class="show_eyg">
                                        <img src="assets/images/icon/eye_off.svg" alt="" class="hidden">
                                    </div>
                                </div>
                                <div class="dang_nhap-content-noidung-right-check">
                                    <div class="dang_nhap-content-noidung-right-check-input">
                                        <input type="checkbox" name="remember">
                                    </div>
                                    <div class="dang_nhap-content-noidung-right-check-text">Ghi nhớ tài khoản</div>
                                </div>
                                <button type="submit" class="dang_nhap-content-noidung-right-btn dn_resraurant">ĐĂNG NHẬP</button>
                                <!-- <button type="submit" class="dang_nhap-content-noidung-right-btn dn_resraurant" onclick="login()">ĐĂNG NHẬP</button> -->
                                <a href="/nhap-email-restaurant.html" class="dang_nhap-content-noidung-right-link text_blue">Quên mật khẩu</a>
                                <div class="dang_nhap-content-noidung-right-link2">
                                    <div class="dang_nhap-content-noidung-right-link2-text">Bạn chưa có tài khoản? </div>
                                    <a href="dang-ky-nha-hang.html" class="dang_nhap-content-noidung-right-link2-a money">Đăng ký</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(session()->has('veryEmailSuccess'))
        <div class="popupErrorEmail show">
            <div class="popupErrorEmail-padding">
                <span class="line-success"></span>
                <span class="show_text">{{ session('veryEmailSuccess') }}</span>
            </div>
        </div>
    @endif
    incorrect account
    @if(session()->has('IncorrectInformation'))
        <div class="popupErrorEmail show">
            <div class="popupErrorEmail-padding">
                <span class="line-red"></span>
                <span class>{{ session()->get('IncorrectInformation') }}</span>
            </div>
        </div>
    @endif

@endsection