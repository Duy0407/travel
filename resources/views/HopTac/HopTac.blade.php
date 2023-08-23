@extends('KhachHang.master.master')
@section('title','Hợp Tác')
@section('content')
    <div class="wrapper_all bacK__management">
        <header>
            @include('HopTac.master.header')
        </header>
        <div class="cooperate">
            <div class="cooperate_container">
                <div class="cooperate_title">
                    <p class="font_w600 font_s40 line_h56 color_white">Phát triển Business của bạn với chúng tôi</p>
                </div>
                <div class="cooperate_content">
                    <div class="cooperate_menu d_flex">
                        <div class="cooperate_menu_li actite_hoptac" onclick="hoptac(this,1,'.cooperate_menu_li',this)">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5902 4H7.28354C4.63021 4 3.29688 5.34667 3.29688 8.02667V29.3333H10.4969V24.3333C10.4969 23.7867 10.9502 23.3333 11.4969 23.3333C12.0435 23.3333 12.4969 23.7733 12.4969 24.3333V29.3333H19.5635V8.02667C19.5635 5.34667 18.2435 4 15.5902 4ZM14.8302 17H8.23021C7.68354 17 7.23021 16.5467 7.23021 16C7.23021 15.4533 7.68354 15 8.23021 15H14.8302C15.3769 15 15.8302 15.4533 15.8302 16C15.8302 16.5467 15.3769 17 14.8302 17ZM14.8302 12H8.23021C7.68354 12 7.23021 11.5467 7.23021 11C7.23021 10.4533 7.68354 10 8.23021 10H14.8302C15.3769 10 15.8302 10.4533 15.8302 11C15.8302 11.5467 15.3769 12 14.8302 12Z" fill="currentcolor" />
                                <path d="M31.1615 28.3341H28.1348V24.3341C29.4015 23.9208 30.3215 22.7341 30.3215 21.3341V18.6675C30.3215 16.9208 28.8948 15.4941 27.1481 15.4941C25.4015 15.4941 23.9748 16.9208 23.9748 18.6675V21.3341C23.9748 22.7208 24.8815 23.8941 26.1215 24.3208V28.3341H1.82813C1.28146 28.3341 0.828125 28.7875 0.828125 29.3341C0.828125 29.8808 1.28146 30.3341 1.82813 30.3341H27.0681C27.0948 30.3341 27.1081 30.3475 27.1348 30.3475C27.1615 30.3475 27.1748 30.3341 27.2015 30.3341H31.1615C31.7081 30.3341 32.1615 29.8808 32.1615 29.3341C32.1615 28.7875 31.7081 28.3341 31.1615 28.3341Z" fill="currentcolor" />
                            </svg>
                            <p class="font_w500 font_s16 line_h24 color_gray7 mt_8">Chỗ nghỉ</p>
                            <div class="linkRoute" hidden data-link="{{route('loginRestaurant')}}"></div>
                        </div>
                        <div class="cooperate_menu_li"  onclick="hoptac(this,2,'.cooperate_menu_li',this)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 24.9993C15.4533 24.9993 15 24.546 15 23.9993V22.666C15 22.1193 15.4533 21.666 16 21.666C16.5467 21.666 17 22.1193 17 22.666V23.9993C17 24.546 16.5467 24.9993 16 24.9993Z" fill="currentcolor" />
                                <path d="M16 30.3333C15.4533 30.3333 15 29.88 15 29.3333V28C15 27.4533 15.4533 27 16 27C16.5467 27 17 27.4533 17 28V29.3333C17 29.88 16.5467 30.3333 16 30.3333Z" fill="currentcolor" />
                                <path d="M2.6668 30.3341C2.5868 30.3341 2.5068 30.3208 2.4268 30.3074C1.89346 30.1741 1.56013 29.6274 1.69346 29.0941L3.0268 23.7608C3.16013 23.2274 3.69346 22.8941 4.24013 23.0274C4.77346 23.1608 5.1068 23.7074 4.97346 24.2408L3.64013 29.5741C3.52013 30.0274 3.12013 30.3341 2.6668 30.3341Z" fill="currentcolor" />
                                <path d="M29.0009 30.0029C28.5476 30.0029 28.1476 29.6962 28.0276 29.2429L26.6942 23.9095C26.5609 23.3762 26.8809 22.8295 27.4276 22.6962C27.9609 22.5629 28.5076 22.8829 28.6409 23.4295L29.9742 28.7629C30.1076 29.2962 29.7876 29.8429 29.2409 29.9762C29.1609 29.9895 29.0809 30.0029 29.0009 30.0029Z" fill="currentcolor" />
                                <path d="M25.5229 7.06732C25.5229 7.46732 25.1896 7.78732 24.8029 7.78732H7.37625C6.97625 7.78732 6.65625 7.45398 6.65625 7.06732C6.65625 6.66732 6.98958 6.34732 7.37625 6.34732H8.36292L8.73625 4.60065C9.08292 2.89398 9.80292 1.33398 12.6829 1.33398H19.4696C22.3496 1.33398 23.0829 2.89398 23.4296 4.58732L23.8029 6.33398H24.7896C25.1896 6.33398 25.5229 6.66732 25.5229 7.06732Z" fill="currentcolor" />
                                <path d="M25.9361 12.5336C25.7895 10.9336 25.3628 9.24023 22.2561 9.24023H9.90946C6.8028 9.24023 6.38946 10.9469 6.22946 12.5336L5.6828 18.4269C5.61613 19.1602 5.85613 19.8936 6.3628 20.4536C6.8828 21.0136 7.6028 21.3336 8.37613 21.3336H10.1895C11.7628 21.3336 12.0561 20.4402 12.2561 19.8402L12.4561 19.2536C12.6828 18.5869 12.7361 18.4269 13.6028 18.4269H18.5628C19.4295 18.4269 19.4561 18.5202 19.7095 19.2536L19.9095 19.8402C20.0961 20.4402 20.4028 21.3336 21.9628 21.3336H23.7761C24.5361 21.3336 25.2695 21.0136 25.7895 20.4536C26.2961 19.9069 26.5361 19.1602 26.4695 18.4269L25.9361 12.5336ZM13.1761 14.5602H10.2828C9.8828 14.5602 9.5628 14.2269 9.5628 13.8402C9.5628 13.4536 9.89613 13.1202 10.2828 13.1202H13.1895C13.5895 13.1202 13.9095 13.4536 13.9095 13.8402C13.9095 14.2269 13.5761 14.5602 13.1761 14.5602ZM21.8828 14.5602H18.9761C18.5761 14.5602 18.2561 14.2269 18.2561 13.8402C18.2561 13.4536 18.5895 13.1202 18.9761 13.1202H21.8828C22.2828 13.1202 22.6028 13.4536 22.6028 13.8402C22.6028 14.2269 22.2828 14.5602 21.8828 14.5602Z" fill="currentcolor" />
                            </svg>
                            <p class="font_w500 font_s16 line_h24 color_gray7 mt_8">Chuyến xe</p>
                            <div class="linkRoute" hidden data-link="{{route('loginRestaurant')}}"></div>
                        </div>
                        <div class="cooperate_menu_li"  onclick="hoptac(this,3,'.cooperate_menu_li',this)">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_963_80389)">
                                    <path d="M21.8333 7.99935V15.9993C21.8333 17.466 23.0333 18.666 24.5 18.666H25.8333V27.9993C25.8333 28.7327 26.4333 29.3327 27.1667 29.3327C27.9 29.3327 28.5 28.7327 28.5 27.9993V4.17268C28.5 3.30602 27.6867 2.66602 26.8467 2.86602C23.9667 3.57268 21.8333 6.01268 21.8333 7.99935ZM15.1667 11.9993H12.5V3.99935C12.5 3.26602 11.9 2.66602 11.1667 2.66602C10.4333 2.66602 9.83333 3.26602 9.83333 3.99935V11.9993H7.16667V3.99935C7.16667 3.26602 6.56667 2.66602 5.83333 2.66602C5.1 2.66602 4.5 3.26602 4.5 3.99935V11.9993C4.5 14.946 6.88667 17.3327 9.83333 17.3327V27.9993C9.83333 28.7327 10.4333 29.3327 11.1667 29.3327C11.9 29.3327 12.5 28.7327 12.5 27.9993V17.3327C15.4467 17.3327 17.8333 14.946 17.8333 11.9993V3.99935C17.8333 3.26602 17.2333 2.66602 16.5 2.66602C15.7667 2.66602 15.1667 3.26602 15.1667 3.99935V11.9993Z" fill="currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_963_80389">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="font_w500 font_s16 line_h24 color_gray7 mt_8">Nhà hàng</p>
                            <div class="linkRoute" hidden data-link="{{route('loginRestaurant')}}"></div>
                        </div>
                    </div>
                    <div class="cooperate_content_hidden">
                        <div class="cooperate_content_item text1 active_content_block">
                            <p class="font_w700 font_s24 line_h36 color_white">Đăng ký chỗ nghỉ của bạn trên Hunghabay.</p>
                            <p class="font_w500 font_s16 line_h24 color_white mt_16">Từ căn hộ cho đến biệt thự và các loại chỗ nghỉ khác đều có thể được đăng miễn phí. Chỗ nghỉ của bạn cũng được giảm giá cho các sản phẩm và dịch vụ giúp tiết kiệm thời gian cho Quý vị và cải thiện trải nghiệm cho khách.</p>
                        </div>
                        <div class="cooperate_content_item text2 hidden" >
                            <p class="font_w700 font_s24 line_h36 color_white">Đăng ký chuyến xe của bạn trên Hunghabay.</p>
                            <p class="font_w500 font_s16 line_h24 color_white mt_16">Tăng doanh thu kinh doanh Cho thuê ô tô, Xe đưa đón hoặc Đưa đón Sân bay của bạn ngay bây giờ. Với Hunghabay, hãy đặt hoạt động kinh doanh vận tải mặt đất của bạn lên hàng đầu đối với khách hàng.</p>
                        </div>
                        <div class="cooperate_content_item text3 hidden">
                            <p class="font_w700 font_s24 line_h36 color_white">Tự tin đưa cửa hàng ẩm thực của bạn đi trước cuộc chơi!</p>
                            <p class="font_w500 font_s16 line_h24 color_white mt_16">Mang những món ngon trong kinh doanh ẩm thực của bạn trở nên sống động với Hunghabay. Nếu bạn có nhà hàng, quán cà phê, chúng tôi đảm bảo rằng cửa hàng của bạn sẽ nổi bật và làm tăng nhận diện thương hiệu của bạn.</p>
                        </div>

                        <a href="" id="getLinkRoute">
                            <div class="cooperate_content_btn mt_32">
                                <p class="font_w500 font_s16 line_h24 color_white">Đăng Nhập</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#cooperate_li').addClass('active_color_main');
    </script>

@endsection
