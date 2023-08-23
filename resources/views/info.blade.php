    <div class="header_right_help mr_24">
        <img src="assets/images/icon/help_icon.svg" alt="">
    </div>
    <div class="header_right_bell">
        <img src="assets/images/icon/bell_gray.svg" alt=""class="bell_click">
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

    <div class="btn_login_register d_flex align_c">
        <div class="btn_login_register-avt ml_24">
            <img src="assets/images/avt.png" alt="">
        </div>
        <div class="btn_login-click">
            <img src="assets/images/icon/btn_header.svg" alt="">
        </div>
        <div class="header_account">
            <div class="header_account_infor d_flex align_c">
                <div class="header_account-avt">
                    <img src="assets/images/avt.png" alt="{{ $user->userInfo->avatar }}">
                </div>
                <div class="header_account_name ml_8">
                    <p class="font_w600 font_s16 line_h24 color_gray9">{{ $user->userInfo->name }}</p>
                    <p class="font_w400 font_s16 line_h24 color_gray8">ID: {{$user->id}}</p>
                    <p class="font_w400 font_s16 line_h24 color_gray8">{{$user->email}}</p>
                </div>
            </div>
            <div class="header_account_ul">
                <div class="header_account_li d_flex align_c " onclick="location.href='/tai-khoan-ca-nhan.html'">
                    <img src="assets/images/footer/user.svg" alt="">
                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Tài khoản</p>
                </div>
                <div class="header_account_li d_flex align_c " onclick="location.href='/quan-ly-tin-da-thich-hotel.html'">
                    <img src="assets/images/footer/heart_broken.svg" alt="">
                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Yêu thích</p>
                </div>
                <div class="header_account_li d_flex align_c " onclick="location.href='/quan-ly-tin-don-dat-phong.html'">
                    <img src="assets/images/footer/archive_book.svg" alt="">
                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Đơn hàng</p>
                </div>
                <div class="header_account_li d_flex align_c " onclick="location.href='/trang-chu-huong-dan.html'">
                    <img src="assets/images/footer/message_question.svg" alt="">
                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Hướng dẫn</p>
                </div>
                <div class="header_account_li d_flex align_c ">
                    <img src="assets/images/footer/setting_gray.svg" alt="">
                    <p class="font_w400 font_s16 line_h24 color_gray9 ml_8">Cài đặt</p>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="header_account_li d_flex align_c ">
                    <p class="font_w400 font_s16 line_h24 color_gray9 mr_10">Đăng xuất</p>
                    <img src="assets/images/footer/logout.svg" alt="">
                </div>
                </a>
            </div>
        </div>
    </div>

