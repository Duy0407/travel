@extends('KhachHang.master.master')
@section('title','Travel')
@section('content')
<div class="wrapper_all hunghabay_index">
    <div class="hunghabay_banner">
        <header>
            <div class="header_conter_hotel header_conter_hotel_update">
                <div class="header_khoi d_flex space_b align_c">
                    <div class="header_responsive d_flex align_c">
                        <img src="/images/icon/header_white_1024.svg" alt="" class="header_khoi-close-show">
                    </div>
                    <div class="header_left d_flex align_c ">
                        <a href="/" class="header_logo">Trạm xăng số 7</a>
                    </div>
                    <div class="header_right d_flex align_c">
                        <div class="header_right_help mr_24">
                            <img src="assets/images/icon/help_icon.svg" alt="">
                        </div>
                        <div class="header_right_bell">
                            <img src="assets/images/icon/bell_gray.svg" alt="" class="bell_click">
                            <div class="popup_bell">
                                <div class="popup_bell_title">
                                    <p class="font_w700 font_s16 line_h24 color_474747"> Thông báo</p>
                                </div>
                                <div class="popup_bell_box">
                                    <div class="popup_bell_item">
                                        <p class="font_w500 font_s16 line_h24 color_474747">Bạn được mời vào đội nhóm ABC bởi ABC</p>
                                    </div>
                                    <div class="popup_bell_item">
                                        <p class="font_w500 font_s16 line_h24 color_474747">Bạn được mời vào đội nhóm ABC bởi ABC</p>
                                    </div>
                                    <div class="popup_bell_item">
                                        <p class="font_w500 font_s16 line_h24 color_474747">Bạn được mời vào đội nhóm ABC bởi ABC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header_right_mess ml_24">
                            <img src="assets/images/icon/messenger.svg" alt="">
                        </div>

                        <div class="btn_login_register header_main_account d_flex align_c ml_24">

                            <!-- Chưa đăng nhập -->
                            <div class="header_main_login">
                                <a href="/dang-nhap-hunghabay.html" class="font_w500 font_s16 line_h24 color_main">Đăng nhập</a>
                            </div>
                            <div class="header_main_register ml_16">
                                <a href="/dang-ky-hunghabay.html" class="font_w500 font_s16 line_h24 color_white">Đăng ký</a>
                            </div>

                            <!-- Đã đăng nhâp -->
                            <div class="btn_login_register-avt ml_24">
                                <img src="assets/images/avt.png" alt="">
                            </div>
                            <div class="btn_login-click">
                                <img src="assets/images/icon/white_dowtrend.svg" alt="">
                            </div>

                            
                            <div class="header_account hidden">
                                <div class="header_account_infor d_flex align_c">
                                    <div class="header_account-avt">
                                        <img src="assets/images/avt.png" alt="">
                                    </div>
                                    <div class="header_account_name ml_8">
                                        <p class="font_w600 font_s16 line_h24 color_gray9">Nguyễn Ngọc Tuyết Phương</p>
                                        <p class="font_w400 font_s16 line_h24 color_gray8 mt_6">ID: 0123</p>
                                        <p class="font_w400 font_s16 line_h24 color_gray8 mt_6">simmons@example.com</p>
                                    </div>
                                </div>
                                <div class="header_account_ul">
                                    <div class="header_account_li d_flex align_c " onclick="location.href='/tai-khoan-ca-nhan.html'">
                                        <img src="/images/footer/user.svg" alt="">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Tài khoản</p>
                                    </div>
                                    <div class="header_account_li d_flex align_c " onclick="location.href='/quan-ly-tin-da-thich-hotel.html'">
                                        <img src="/images/footer/heart_broken.svg" alt="">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Yêu thích</p>
                                    </div>
                                    <div class="header_account_li d_flex align_c " onclick="location.href='/quan-ly-tin-don-dat-phong.html'">
                                        <img src="/images/footer/archive_book.svg" alt="">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Đơn hàng</p>
                                    </div>
                                    <div class="header_account_li d_flex align_c "  onclick="location.href='/trang-chu-huong-dan.html'">
                                        <img src="/images/footer/message_question.svg" alt="">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Hướng dẫn</p>
                                    </div>
                                    <div class="header_account_li d_flex align_c ">
                                        <img src="/images/footer/setting_gray.svg" alt="">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Cài đặt</p>
                                    </div>
                                    <div class="header_account_li d_flex align_c "  onclick="location.href='/dang-nhap-hunghabay.html'">
                                        <p class="font_w400 font_s16 line_h24 color_gray9 mr_10">Đăng xuất</p>
                                        <img src="/images/footer/logout.svg" alt="">
                                    </div>
                                </div>
                            </div>

                            

                        </div>

                    </div>
                </div>
                <div class="header_khoi_ul overlay_dong">
                    <div class="header_khoi_ul_res-close">
                        <img src="/images/icon/cross_close_xanh.svg" alt="" class="close_popup">
                    </div>
                    <ul class="nav_menu d_flex">
                        <li class="nav_li">
                            <a href="/khach-san.html">Khách sạn</a>
                        </li>
                        <li class="nav_li">
                            <a href="{{url('restaurant')}}">Nhà hàng</a>
                        </li>
                        <li class="nav_li">
                            <a href="/homestay.html">Homestay</a>
                        </li>
                        <li class="nav_li">
                            <a href="https://hunghabay.vn/">Chuyến bay</a>
                        </li>
                        <li class="nav_li">
                            <a href="/trang-chu-tour-du-lich.html">Tour</a>
                        </li>
                        <li class="nav_li">
                            <a href="/trang-chu-chuyen-xe.html">Chuyến xe</a>
                        </li>
                        <li class="nav_li utilities_li">
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
                        <!-- <li class="nav_li header_sign_up">
                            <a href="/dang-nhap-hunghabay.html" class=" color_reb">Đăng xuất</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </header>

        <div class="banner_date">
            <div class="time_st"><?php echo date('d___m___Y', time()) ?></div>
        </div>

        <div class="social_network_border">
            <div class="social_network">
                <div class="social_network-facebook">
                    <img src="assets/images/footer/footer_fbook.svg" alt="">
                </div>
                <div class="social_network-twtiter">
                    <img src="assets/images/footer/footer_twtiter.svg" alt="">
                </div>
                <div class="social_network_instagram">
                    <img src="assets/images/footer/footer_instagram.svg" alt="">
                </div>
                <div class="social_network_youtube">
                    <img src="assets/images/footer/footer_youtube.svg" alt="">
                </div>
            </div>
        </div>
        <div class="navigation_main">
            @include('search')
        </div>
    </div>

    <div class="hunghabay_index_container">
        <div class="hunghabay_wrapper">
            <div class="slick_holtel_homestay">
                <div class="slick_holtel_width">
                    <div class="hunghabay_slick_left">
                        <div class="slick_ul d_flex">
                            <li class="slick_li slick_hotel_click active_item" data-slide="1" onclick="slickSlider('.slick_li',this,'.slick_homestay','.slick_hotel','.sliderHomeStay','.sliderHotel')">
                                <p>Khách sạn</p>
                            </li>
                            <li class="slick_li slick_homestay_click ml_32" data-slide="2" onclick="slickSlider('.slick_li',this,'.slick_hotel','.slick_homestay','.sliderHotel','.sliderHomeStay')">
                                <p>Homestay</p>
                            </li>
                        </div>
                        <div class="hunghabay_slick_hidden">
                            <!-- Text slider Hotel -->
                            <div class="slick_hotel">
                                <div class="slick_hotel_title">
                                    <p class="font_w400 ">Khách sạn</p>
                                </div>
                                <div class="slick_hotel_list">
                                    <div class="slick_hotel_element acitve_slder">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8">Khách sạn căn hộ</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">
                                            Căn hộ đủ nội thất, nằm trong chung cư, có phòng riêng và các dịch vụ như khách sạn.
                                        </p>
                                    </div>

                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8">Khu nghỉ dưỡng:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">

                                            Khu phức hợp gồm nhiều khu lưu trú có phòng riêng và nhiều tiện nghi cao cấp.
                                        </p>
                                    </div>

                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8">Nhà nghỉ:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">

                                            Nơi lưu trú diện tích nhỏ, tiện nghi đơn giản thường được chuyển đổi từ nhà ở tư nhân.
                                        </p>
                                    </div>
                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Bungalow:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">
                                            Phòng nghỉ biệt lập trong khu sinh thái.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Text slider HomeStay -->
                            <div class="slick_homestay hidden">
                                <div class="slick_hotel_title">
                                    <p class="font_w400 ">Homestay</p>
                                </div>
                                <div class="slick_homestay_list">
                                    <div class="slick_hotel_element acitve_slder">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Căn hộ cao cấp:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">

                                            Được cung cấp bởi cá nhân, cho thuê cả căn đầy đủ tiện nghi bếp, phòng ngủ, phòng khách.
                                        </p>
                                    </div>

                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Nhà nguyên căn:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">

                                            Được cung cấp bỏi cá nhân, mô hình nhà riêng cho thuê cả nhà.
                                        </p>
                                    </div>

                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Homestay:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">

                                            Được cung cấp bởi cá nhân, mô hình nhà riêng cho thuê theo phòng.
                                        </p>
                                    </div>
                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Biệt thự nhà vườn:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">
                                            Được cung cấp bởi cá nhân, có khuôn viên biệt lập với nhiều tiện nghi cao cấp.
                                        </p>
                                    </div>
                                    <div class="slick_hotel_element">
                                        <p class="khachsan_html_title font_w700 font_s16 line_h24 color_gray8"> Bungalow:</p>
                                        <p class="khachsan_html_text font_w400 font_s16 line_h24 color_gray8">
                                            Phòng nghỉ biệt lập trong khu sinh thái được cung cấp bởi cá nhân địa phương.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hunghabay_slick_right ">
                        <div class="hunghabay_slick_right_item">
                            <!-- Slider Hotel -->
                            <div class="sliderHotel active_dots_xanh d_flex travelSlider1">
                                <div class="slick_right_hotel_item item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/holtel_insert_mot.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Khách sạn căn hộ</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item   item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/holtel_insert_hai.png" alt="">
                                    </div>
                                    <p class=" index_text_hover font_w700 font_s24 line_h36 color_white">Khu nghỉ dưỡng</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item   item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/holtel_insert_ba.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Nhà nghỉ</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/holtel_insert_bon.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Bungalow</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                            </div>
                            <!-- Slider Homestay -->
                            <div class="sliderHomeStay active_dots_xanh d_flex travelSlider2 hidden">
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/homstay_insert_mot.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Căn hộ cao cấp</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/homstay_insert_hai.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Nhà nguyên căn</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/homstay_insert_ba.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Homestay</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/homstay_insert_bon.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Biệt thự nhà vườn</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                                <div class="slick_right_hotel_item  item e2">
                                    <div class="slick_right_hotel-img">
                                        <img src="assets/images/holtel/homstay_insert_nam.png" alt="">
                                    </div>
                                    <p class="font_w700 font_s24 line_h36 color_white">Bungalow</p>
                                    <div class="line top"></div>
                                    <div class="line bottom"></div>
                                    <div class="line left"></div>
                                    <div class="line right"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Xem thêm Hotel -->
                        <div class="hunghabay_slick_right_view search_view_hotel d_flex" onclick="location.href='/tim-kiem-khach-san.html'">
                            <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                            <img src="assets/images/icon/arrow_narrow_right.svg" alt="" class="ml_4">
                        </div>
                        <!-- Xem thêm HomeStay -->
                        <div class="hunghabay_slick_right_view search_view_homestay d_flex align_c hidden" onclick="location.href='/tim-kiem-homestay.html'">
                            <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                            <img src="assets/images/icon/arrow_narrow_right.svg" alt="" class="ml_4">
                        </div>

                    </div>
                </div>
            </div>

            <!---------------------------- Khách Sạn ---------------------------->
            <div class="holtel_infor-new hunghabay_hotel">
                <div class="hunghabay_hotel_text d_flex align_c space_b">
                    <p class="holtel_infor-new-title">Khách sạn</p>
                    <div class="hunghabay_hotel_menu d_flex align_c">
                        <div class="hunghabay_hotel_li active_item" onclick="slick_index('.hunghabay_hotel_li',this)">
                            <p class="font_w600 font_s20 line_h32 color_gray4">Được đề xuất</p>
                        </div>
                        <div class="hunghabay_hotel_li ml_32" onclick="slick_index('.hunghabay_hotel_li',this)">
                            <p class="font_w600 font_s20 line_h32 color_gray4">Đánh giá cao</p>
                        </div>
                    </div>
                </div>
                <div class="holtel_infor-new-box">
                    <?php for ($i = 0; $i < 9; $i++) : ?>
                        <div class="holtel_infor-new-item">
                            <div class="div_abs">
                                <div class="holtel_infor-new-avt slickImg">
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/holtel/avt_canho.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/holtel/avt_canho.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/holtel/avt_canho.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/holtel/avt_canho.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>

                                </div>
                                <div class="holtel_infor-new-avt-heart">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" fill="currentcolor" fill-opacity="0.5" />
                                        <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                            <div class="holtel_infor-new-khoi" onclick="location.href='/chi-tiet-khach-san.html'">
                                <div class="holtel_infor-new-first">
                                    <p class="holtel_infor-new-khoi-title font_w700 font_s18 line_h28 color_gray9">
                                        Richico Apartments And Hotel ichico Apartments And Hotel
                                    </p>
                                    <div class="holtel_infor-new-star d_flex align_c space_b">
                                        <div class="holtel_infor-new-star-img">
                                            <img src="/images/icon/star_xanh.svg" alt="">
                                            <img src="/images/icon/star_xanh.svg" alt="">
                                            <img src="/images/icon/star_xanh.svg" alt="">
                                        </div>
                                        <div class="holtel_infor-new-star-resort">
                                            <p class="font_w400 font_s12 line_h15 color_main">Khu nghỉ dưỡng</p>
                                        </div>
                                    </div>
                                    <div class="holtel_infor-new-evaluate d_flex align_c">
                                        <div class="holtel_infor-new-evaluate-img d_flex align_c">
                                            <img src="/images/icon/danhgia_reb.svg" alt="">
                                            <span class="color_reb font_w700 line_h24 "> 9.2</span>
                                            <img src="/images/icon/star_reb.svg" alt="">
                                        </div>
                                        <p class="font_w400 line_h24 color_gray9 font_s16">Tuyệt vời <span class="color_gray7 font_w400 line_h24">(156 đánh giá)</span> </p>
                                    </div>
                                    <div class="holtel_infor-new-infor d_flex">
                                        <div class="holtel_infor-new-infor-img">
                                            <img src="/images/icon/directions_infor.svg" alt="">
                                        </div>
                                        <p class="font_w400 line_h24 color_gray9 font_s16">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang</p>
                                    </div>
                                </div>
                                <div class="holtel_infor-new-last">
                                    <div class="holtel_infor-new-discount">
                                        <p class="font_w400 font_s12 line_h15 color_gray7">2.523.214 đ</p>
                                    </div>
                                    <div class="holtel_infor-new-code-price d_flex align_c space_b">
                                        <div class="holtel_infor-new-code-left d_flex align_c">
                                            <p class="line_h24 color_474747 line_h24 font_w600 font_s16">Mã:</p>
                                            <p class="color_green line_h24 font_w600 font_s16">CHAOPHUQUOC</p>
                                            <p class="color_reb font_s13 line_h18 font_w700 fon_s13">-8%</p>
                                        </div>
                                        <div class="holtel_infor-new-code-right d_flex align_c">
                                            <p class="color_gray7 font_s14 line_h20 font_w400">Còn</p>
                                            <p class="color_reb font_s18 line_h28 font_w600">2.321.356 đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="holtel_infor-new-btnn d_flex align_c" onclick="location.href ='/tim-kiem-khach-san.html'">
                    <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                    <img src="assets/images/icon/arrow_narrow_right.svg" alt="">
                </div>
            </div>
            
            <!---------------------------- HomeStay ---------------------------->
            <div class="hunghabay_homestay_back">
                <div class="holtel_infor-new hunghabay_homestay">
                    <div class="hunghabay_hotel_text d_flex align_c space_b">
                        <p class="holtel_infor-new-title">Homestay</p>
                        <div class="hunghabay_hotel_menu d_flex align_c">
                            <div class="hunghabay_hotel_li active_item" onclick="slick_index('.hunghabay_hotel_li',this)">
                                <p class="font_w600 font_s20 line_h32 color_gray4">Được đề xuất</p>
                            </div>
                            <div class="hunghabay_hotel_li ml_32" onclick="slick_index('.hunghabay_hotel_li',this)">
                                <p class="font_w600 font_s20 line_h32 color_gray4">Đánh giá cao</p>
                            </div>
                        </div>
                    </div>
                    <div class="holtel_infor-new-box">
                        <?php for ($i = 0; $i < 9; $i++) : ?>
                            <div class="holtel_infor-new-item">
                                <div class="div_abs">
                                    <div class="holtel_infor-new-avt slickImg">
                                        <div class="holtel_infor-new-avt-img">
                                            <img src="assets/images/holtel/avt_canho.png" alt="">
                                            <span class="hover_overlay"></span>
                                        </div>
                                        <div class="holtel_infor-new-avt-img">
                                            <img src="assets/images/holtel/avt_canho.png" alt="">
                                            <span class="hover_overlay"></span>
                                        </div>
                                        <div class="holtel_infor-new-avt-img">
                                            <img src="assets/images/holtel/avt_canho.png" alt="">
                                            <span class="hover_overlay"></span>
                                        </div>
                                        <div class="holtel_infor-new-avt-img">
                                            <img src="assets/images/holtel/avt_canho.png" alt="">
                                            <span class="hover_overlay"></span>
                                        </div>
        
                                    </div>
                                    <div class="holtel_infor-new-avt-heart">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" fill="currentcolor" fill-opacity="0.5" />
                                            <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="holtel_infor-new-khoi">
                                    <div class="homestay_index-new-explain d_flex align_c space_b">
                                        <p class="font_w500 font_14 line_h20 color_reb">Nguyên căn</p>
                                        <p class="font_w400 font_s12 line_h15 color_main">Biệt thự nhà vườn</p>
                                    </div>
                                    <div class="holtel_infor-new-first">
                                        <p class="holtel_infor-new-khoi-title font_w700 font_s18 line_h28 color_gray9">
                                            Richico Apartments And Hotel ichico Apartments And Hotel
                                        </p>
                                        <div class="holtel_infor-new-evaluate d_flex align_c">
                                            <div class="holtel_infor-new-evaluate-img d_flex align_c">
                                                <img src="/images/icon/danhgia_reb.svg" alt="">
                                                <span class="color_reb font_w700 line_h24 "> 9.2</span>
                                                <img src="/images/icon/star_reb.svg" alt="">
                                            </div>
                                            <p class="font_w400 line_h24 color_gray9 font_s16">Tuyệt vời <span class="color_gray7 font_w400 line_h24">(156 đánh giá)</span> </p>
                                        </div>
                                        <div class="holtel_infor-new-infor d_flex ">
                                            <div class="holtel_infor-new-infor-img">
                                                <img src="/images/icon/directions_infor.svg" alt="">
                                            </div>
                                            <p class="font_w400 line_h24 color_gray9 font_s16">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang</p>
                                        </div>
                                    </div>
                                    <div class="holtel_infor-new-last">
                                        <div class="holtel_infor-new-discount">
                                            <p class="font_w400 font_s12 line_h15 color_gray7">2.523.214 đ</p>
                                        </div>
                                        <div class="holtel_infor-new-code-price d_flex align_c space_b">
                                            <div class="holtel_infor-new-code-left d_flex align_c">
                                                <p class="line_h24 color_474747 line_h24 font_w600 font_s16">Mã:</p>
                                                <p class="color_green line_h24 font_w600 font_s16">CHAOPHUQUOC</p>
                                                <p class="color_reb font_s13 line_h18 font_w700 fon_s13">-8%</p>
                                            </div>
                                            <div class="holtel_infor-new-code-right d_flex align_c">
                                                <p class="color_gray7 font_s14 line_h20 font_w400">Còn</p>
                                                <p class="color_reb font_s18 line_h28 font_w600">2.321.356 đ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <div class="holtel_infor-new-btnn d_flex align_c"  onclick="location.href ='/tim-kiem-homestay.html'">
                        <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                        <img src="assets/images/icon/arrow_narrow_right.svg" alt="">
                    </div>
                    
                </div>
            </div>

            <!---------------------------- Restaurant ---------------------------->
            <div class="holtel_infor-new restaurant_homestay">
                <div class="hunghabay_hotel_text d_flex align_c space_b">
                    <p class="holtel_infor-new-title">Nhà hàng</p>
                    <div class="hunghabay_hotel_menu d_flex align_c">
                        <div class="hunghabay_hotel_li active_item" onclick="slick_index('.hunghabay_hotel_li',this)">
                            <p class="font_w600 font_s20 line_h32 color_gray4">Được đề xuất</p>
                        </div>
                        <div class="hunghabay_hotel_li ml_32" onclick="slick_index('.hunghabay_hotel_li',this)">
                            <p class="font_w600 font_s20 line_h32 color_gray4">Đánh giá cao</p>
                        </div>
                    </div>
                </div>

                
                <div class="holtel_infor-new-box active_dots_xanh responsive">
                    <?php for ($i = 0; $i < 9; $i++) : ?>
                        <div class="holtel_infor-new-item">
                            <div class="div_abs">
                                <div class="holtel_infor-new-avt slickImg">
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/img2.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/img2.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/img2.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>
                                    <div class="holtel_infor-new-avt-img">
                                        <img src="assets/images/img2.png" alt="">
                                        <span class="hover_overlay"></span>
                                    </div>

                                </div>
                                <div class="holtel_infor-new-avt-heart">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" fill="currentcolor" fill-opacity="0.5" />
                                        <path d="M21.1721 12.4854L12.0102 21.5594L2.84826 12.4854C2.24395 11.8973 1.76794 11.1905 1.45021 10.4095C1.13248 9.62841 0.979915 8.79003 1.00212 7.94711C1.02432 7.10419 1.22081 6.275 1.57922 5.51176C1.93763 4.74851 2.45019 4.06774 3.08462 3.51231C3.71905 2.95689 4.46162 2.53884 5.26555 2.28449C6.06949 2.03015 6.91738 1.94502 7.75583 2.03446C8.59429 2.1239 9.40514 2.38598 10.1373 2.80419C10.8695 3.2224 11.5072 3.78768 12.0102 4.46444C12.5153 3.7926 13.1538 3.23225 13.8854 2.81848C14.6171 2.40471 15.4263 2.14642 16.2624 2.05977C17.0985 1.97312 17.9435 2.05999 18.7445 2.31492C19.5455 2.56986 20.2853 2.98739 20.9175 3.54137C21.5497 4.09534 22.0607 4.77385 22.4186 5.53442C22.7766 6.29499 22.9736 7.12126 22.9975 7.9615C23.0214 8.80174 22.8716 9.63786 22.5575 10.4176C22.2434 11.1972 21.7718 11.9037 21.1721 12.4927" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="holtel_infor-new-khoi">
                                <div class="restaurant__item_title d_flex align_c mt_8">
                                    <p class="font_w400 font_12 line_h15 color_reb">Bánh mì</p>
                                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Món Việt, món Nhật</p>
                                </div>
                                <div class="holtel_infor-new-first">
                                    <p class="holtel_infor-new-khoi-title font_w700 font_s18 line_h28 color_gray9">
                                        Richico Apartments And Hotel ichico Apartments And Hotel
                                    </p>
                                    <div class="holtel_infor-new-evaluate d_flex align_c">
                                        <div class="holtel_infor-new-evaluate-img d_flex align_c">
                                            <img src="/images/icon/danhgia_reb.svg" alt="">
                                            <span class="color_reb font_w700 line_h24 "> 9.2</span>
                                            <img src="/images/icon/star_reb.svg" alt="">
                                        </div>
                                        <p class="font_w400 line_h24 color_gray9 font_s16">Tuyệt vời <span class="color_gray7 font_w400 line_h24">(156 đánh giá)</span> </p>
                                    </div>
                                    <div class="holtel_infor-new-infor d_flex">
                                        <div class="holtel_infor-new-infor-img">
                                            <img src="/images/icon/directions_infor.svg" alt="">
                                        </div>
                                        <p class="font_w400 line_h24 color_gray9 font_s16">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang</p>
                                    </div>
                                </div>
                                <div class="restaurant_infor-new-last">
                                    <div class="restaurant__infor_box d_flex mt_8">
                                        <div class="popup_restaurant_ul-li d_flex">
                                            <img src="assets/images/icon/DatBan.svg" alt="">
                                            <p class="font_w400 line_h24 color_yellow">Đặt bàn</p>
                                        </div>
                                        <div class="popup_restaurant_ul-li d_flex">
                                            <img src="assets/images/icon/GiaoMon.svg" alt="">
                                            <p class="font_w400 line_h24 color_green">Giao món</p>
                                        </div>
                                        <div class="popup_restaurant_ul-li d_flex">
                                            <img src="assets/images/icon/LayHang.svg" alt="">
                                            <p class="font_w400 line_h24 color_reb">Lấy hàng</p>
                                        </div>
                                    </div>
                                    <div class="restaurant_item_price text_r mt_8">
                                        <p class="font_w600 font_s18 line_h28 color_red">50k - 650k/ <span class="color_gray9"> người </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="holtel_infor-new-btnn d_flex align_c"  onclick="location.href ='/tim-kiem-nha-hang.html'">
                    <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                    <img src="assets/images/icon/arrow_narrow_right.svg" alt="">
                </div>
            </div>
            
            <!---------------------------- Điểm đến yêu thích ---------------------------->
            <div class="hunghabay_favourite">
                <div class="hunghabay_favourite_title">
                    <p class="font_w700 font_s40 line_h68 color_gray9">Điểm đến yêu thích</p>
                </div>
                <div class="hunghabay_favourite_box">
                    <div class="hunghabay_favourite_cot1">
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/nhatrang.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Nha Trang</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                    </div>
                    <div class="hunghabay_favourite_cot2">
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/danang.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Đà nẵng</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/vungtau.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Bà Rịa - <br> Vũng Tàu</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                    </div>
                    <div class="hunghabay_favourite_cot3">
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/halong.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Hạ Long</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/phuquoc.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Phú Quốc</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                    </div>
                    <div class="hunghabay_favourite_cot4">
                        <div class="slick_right_hotel_item  item e2">
                            <div class="slick_right_hotel-img">
                                <img src="assets/images/hoian.png" alt="">
                            </div>
                            <p class="font_w700 font_s24 line_h36 color_white">Hội An</p>
                            <div class="line top"></div>
                            <div class="line bottom"></div>
                            <div class="line left"></div>
                            <div class="line right"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------------- Cẩm năng du lịch ---------------------------->
            <div class="handbook">
                <div class="handbook_title">
                    <p class="font_w700 font_s50 line_h68 color_gray9">Cẩm nang du lịch</p>
                </div>
                <div class="handbook_box d_flex space_b">
                    <div class="handbook_left">
                        <div class="handbook_left_avt">
                            <img src="assets/images/camnang_avt.jpg" alt="">
                        </div>
                        <div class="handbook_text mt_16">
                            <p class="font_w500 font_s18 line_h28 color_gray9">Kinh nghiệm đi du lịch Buôn Ma Thuột từ A - Z mọi du khách cần biết</p>
                            <div class="handbook_text_infor mt_8">
                                <p class="font_w400 font_s16 line_h24 color_gray8">Du lịch đang trở thành xu hướng mới được khách du lịch mọi lứa tuổi yêu thích. Không chỉ có cơ hội hòa mình giữa thiên nhiên hùng vĩ, tận hưởng khí hậu ấm áp, khô nóng đặc trưng, du khách còn được khám phá văn hóa Tây Nguyên, gặp gỡ những người dân bản địa thân thiện, vui vẻ. Bạn đang lên kế hoạch cho chuyến du lịch Buôn Ma Thuột mà vẫn gặp khó khăn khi lên lịch trình, lựa chọn điểm đến? </p>
                            </div>
                            <div class="handbook_text_author mt_8 d_flex align_c space_b">
                                <div class="handbook_author_name d_flex align_c">
                                    <p class="font_w400 font_s14 line_h20 color_gray9">Tác giả:</p>
                                    <p class="font_w600 font_s16 line_h24 color_gray9 ml_8">Nguyễn Ngọc Tuyết phương</p>
                                </div>
                                <div class="date_submitted ">
                                    <p class="font_w500 font_s14 line_h20 color_gray7">20/10/2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="handbook_right">
                        <div class="handbook_right_box">
                            <?php for ($i = 0; $i < 4; $i++) : ?>
                                <div class="handbook_right_item d_flex ">
                                    <div class="handbook_r_item_left">
                                        <img src="assets/images/avt_cn_phuquoc.jpg" alt="">
                                    </div>
                                    <div class="handbook_r_item_right">
                                        <p class="font_w500 font_s18 line_h28 color_gray9">Kinh nghiệm đi du lịch Buôn Ma Thuột từ A - Z mọi du khách cần biết</p>
                                        <div class="handbook_text_infor mt_8">
                                            <p class="elipsis3 font_w400 font_s16 line_h24 color_gray8">Du lịch đang trở thành xu hướng mới được khách du lịch mọi lứa tuổi yêu thích. Không chỉ có cơ hội hòa mình giữa thiên nhiên hùng vĩ, tận hưởng khí hậu ấm áp, khô nóng đặc trưng, du khách còn được khám phá văn hóa Tây Nguyên, gặp gỡ những người dân bản địa thân thiện, vui vẻ. Bạn đang lên kế hoạch cho chuyến du lịch Buôn Ma Thuột mà vẫn gặp khó khăn khi lên lịch trình, lựa chọn điểm đến? </p>
                                        </div>
                                        <div class="handbook_text_author mt_8 d_flex align_c space_b">
                                            <div class="handbook_author_name d_flex align_c">
                                                <p class="font_w400 font_s14 line_h20 color_gray9">Tác giả:</p>
                                                <p class="font_w600 font_s16 line_h24 color_gray9 ml_8">Nguyễn Ngọc Tuyết phương</p>
                                            </div>
                                            <div class="date_submitted ">
                                                <p class="font_w500 font_s14 line_h20 color_gray7">20/10/2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="holtel_infor-new-btnn d_flex align_c"  onclick="location.href ='https://hunghabay.vn/cam-nang-du-lich'">
                    <p class="font_w700 font_s18 line_h28 color_main">Xem thêm</p>
                    <img src="assets/images/icon/arrow_narrow_right.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection