<div class="header_conter_hotel header_conter_hotel_update">
    <div class="header_khoi d_flex space_b align_c">

        <!-- <div class="header_responsive d_flex align_c">
            <img src="assets/images/icon/header_1024.svg" alt="" class="header_khoi-close-show">
        </div> -->

        <div class="header_left d_flex align_c ">
            <a href="/" class="header_logo">Trạm Xăng Số 7</a>
        </div>

        <div class="header_right d_flex align_c">
            
            @if(!session()->has('loginSuccess'))
                <div class="btn_login_register header_main_account d_flex align_c ml_24">
                    <a href="">
                        <div class="header_main_login cusor font_w500 font_s16 line_h24 color_main">Đăng nhâp</div>
                    </a>
                    <a href="">
                        <div class="header_main_register cusor ml_16 font_w500 font_s16 line_h24 color_white">Đăng ký</div>
                    </a>
                </div>
            @else
                @include('info')
            @endif
        </div>

    </div>

    <!-- Điều hướng -->
        <div class="header_khoi_ul overlay_dong">
            <div class="header_khoi_ul_res-close">
                <img src="assets/images/icon/cross_close_xanh.svg" alt="" class="close_popup">
            </div>
            <ul class="nav_menu d_flex">
                <li class="nav_li" id="holtel_li">
                    <a href="/khach-san.html">Khách sạn</a>
                </li>
                <li class="nav_li" id="restaurant_li">
                    <a href="{{url('restaurant')}}">Nhà hàng</a>
                </li>
                <li class="nav_li" id="homestay_li">
                    <a href="/homestay.html">Homestay</a>
                </li>
                <li class="nav_li" id="tour_li">
                    <a href="/trang-chu-tour-du-lich.html">Tour</a>
                </li>
                <li class="nav_li" id="buses_li">
                    <a href="/trang-chu-chuyen-xe.html">Chuyến xe</a>
                </li>
                <li class="nav_li" id="utilities_li">
                    <a href="#">Tiện ích</a>
                    <div class="utilities_ul_c2_gach"></div>
                    <ul class="utilities_ul_c2">
                        <li class="li_c2">
                            <a href="/kham-pha-dia-diem.html">Khám phá địa điểm</a>
                        </li>
                        <li class="li_c2">
                            <a href="/so-sanh-cho-nghi.html">So sánh chỗ nghỉ</a>
                        </li>
                        <li class="li_c2">
                            <a href="/cho-nghi-gan-day.html">Chỗ nghỉ quanh đây</a>
                        </li>
                        <li class="li_c2">
                            <a href="/tham-khao-gia-phong.html">Tham khảo giá phòng</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_li" id="cooperate_li">
                    <a href="{{url('hop-tac')}}">Hợp tác</a>
                </li>
            </ul>
        </div>
    <!-- End Điều hướng -->
</div>