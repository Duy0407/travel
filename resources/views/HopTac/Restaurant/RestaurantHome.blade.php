@extends('HopTac.master.home')
@section('title','Trang chủ nhà hàng')
@section('content')

    <div class="content">
        <div class="content_head">
            <div class="content_head-banner"></div>
            <div class="content_head-banner-text">Tìm nhà hàng với Hunghabay</div>
            <div class="content_head-navigate">
                @include('search')
            </div>
        </div>

        <div class="content_between">
            <div class="content_between_padding">
                <div class="content_between_suv">
                    <div class="content_between-list-product CategoryRestaurant">
                        @foreach($businessType as $type)
                            <a href="#" class="content_between-list-product-frames">
                                <div class="list-product-frames-sub">
                                    <div class="list-product-frames-img">
                                        <img src="assets/images/{{$type->image}}" alt="">
                                    </div>
                                    <div class="list-product-frames-text">{{$type->name}}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="content_between-restaurant">

                    <!-- Nhà Hàng nổi bật -->
                    <div class="between-restaurant-noibat">
                        <div class="between-restaurant-noibat-text">Nhà hàng nổi bật</div>
                        <div class="between-restaurant-frames FeaturedRestaurant active_dots_xanh">

                            <?php for($i = 0; $i < 4; $i++):?>
                                <div class="between-restaurant-frames-sub">
                                    <div class="between-restaurant-frames-img">
                                        <img src="assets/images/img1.png" alt="">
                                    </div>
                                    <div class="between-restaurant-frames-text">
                                        <div class="between-restaurant-frames-text-head elipsis2">Terraço Sky Bar & Restaurant - Khách sạn La Sinfonía Del Rey Hotel & Spa</div>
                                        <div class="between-restaurant-frames-text-danh-gia">
                                            <div class="restaurant-frames-text-danh-gia">
                                                <div class="restaurant-frames-text-danh-gia-icon1">
                                                    <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                                </div>
                                                <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                                <div class="restaurant-frames-text-danh-gia-icon2">
                                                    <img src="assets/images/icon/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                            <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                        </div>
                                        <div class="between-restaurant-frames-text-money">50k -650k/người </div>

                                    </div>
                                </div>
                            <?php endfor;?>

                        </div>
                    </div>
                    <!-- Nhà hàng mới nhất -->
                    <div class="between-restaurant-moinhat">
                        <div class="between-restaurant-noibat-text">Nhà hàng mới nhất</div>
                        <div class="between-restaurant-moinhat-frames">
                            <?php for ($i = 0; $i < 9; $i++):?>
                                <div class="between-restaurant-moinhat-frames-suv">
                                    <div class="between-restaurant-moinhat-frames-suv-img">
                                        <img src="assets/images/img2.png" alt="">
                                    </div>
                                    <div class="between-restaurant-moinhat-frames-suv-text">
                                        <div class="restaurant-moinhat-text-key">
                                            <div class="restaurant-moinhat-text-key1">Bánh mì</div>
                                            <div class="restaurant-moinhat-text-key-tex">Món Việt, món Nhật</div>
                                        </div>
                                        <a href="#" class="restaurant-moinhat-text-heading elipsis2">Terraço Sky Bar & Restaurant - Khách sạn La Sinfonía Del Rey Hotel & Spa</a>
                                        <div class="between-restaurant-frames-text-danh-gia">
                                            <div class="restaurant-frames-text-danh-gia">
                                                <div class="restaurant-frames-text-danh-gia-icon1">
                                                    <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                                </div>
                                                <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                                <div class="restaurant-frames-text-danh-gia-icon2">
                                                    <img src="assets/images/icon/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                            <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                        </div>
                                        <div class="restaurant-moinhat-address">
                                            <div class="restaurant-moinhat-text-address-img">
                                                <img src="assets/images/icon/address.svg" alt="">
                                            </div>
                                            <div class="restaurant-moinhat-text-address-text elipsis2">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang, Việt Nam</div>
                                        </div>

                                        <div class="restaurant-moinhat-foot">
                                            <div class="restaurant-moinhat-foot-c bg_money">
                                                <div class="restaurant-moinhat-foot-wh">
                                                    <img src="assets/images/icon/DatBan.svg" alt="">
                                                </div>
                                                <div class="restaurant-moinhat-foot-tex money">Đặt bàn</div>
                                            </div>
                                            <div class="restaurant-moinhat-foot-c bf_success">
                                                <div class="restaurant-moinhat-foot-wh">
                                                    <img src="assets/images/icon/GiaoMon.svg" alt="">
                                                </div>
                                                <div class="restaurant-moinhat-foot-tex success">Giao món</div>
                                            </div>
                                            <div class="restaurant-moinhat-foot-c bg_error">
                                                <div class="restaurant-moinhat-foot-wh">
                                                    <img src="assets/images/icon/LayHang.svg" alt="">
                                                </div>
                                                <div class="restaurant-moinhat-foot-tex error">Lấy hàng</div>
                                            </div>
                                        </div>

                                        <div class="restaurant-moinhat-money-on-peopel"><span class="error">50k - 650k</span>/người </div>

                                    </div>
                                </div>
                            <?php endfor;?>
                        </div>
                        <a href="#" class="between-restaurant-moinhat-xemthem">
                            <div class="between-restaurant-moinhat-xemthem-sub">
                                <div class="between-restaurant-moinhat-xemthem-text">Xem thêm</div>
                                <div class="between-restaurant-moinhat-xemthem-img">
                                    <img src="assets/images/icon/arrow-right.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="content_lats">
            <div class="content_lats_sub">
                <h1 class="content_lats_heading">Xem gần đây</h1>
                <div class="content_lats-frames active_dots_xanh RecentlyViewedRestaurant">

                    <?php for ($i=0; $i < 1; $i++):?>
                        <div class="content_lats-frames_sub">
                            <div class="content_lats-frames_sub-img">
                                <img src="assets/images/img3.png" alt="">
                            </div>
                            <div class="content_lats-frames_sub-main">
                                <a href="#" class="content_lats-frames_sub-main-heading elipsis3">Terraço Sky Bar & Restaurant - Khách sạn La Sin fonía Del Rey Hotel & Spa</a>
                                <div class="between-restaurant-frames-text-danh-gia">
                                    <div class="restaurant-frames-text-danh-gia">
                                        <div class="restaurant-frames-text-danh-gia-icon1">
                                            <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                        </div>
                                        <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                        <div class="restaurant-frames-text-danh-gia-icon2">
                                            <img src="assets/images/icon/star.svg" alt="">
                                        </div>
                                    </div>
                                    <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                    <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                </div>
                                <div class="restaurant-moinhat-address">
                                    <div class="restaurant-moinhat-text-address-img">
                                        <img src="assets/images/icon/address.svg" alt="">
                                    </div>
                                    <div class="restaurant-moinhat-text-address-text elipsis2">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang, Việt Nam</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_lats-frames_sub">
                            <div class="content_lats-frames_sub-img">
                                <img src="assets/images/img3.png" alt="">
                            </div>
                            <div class="content_lats-frames_sub-main">
                                <a href="#" class="content_lats-frames_sub-main-heading elipsis3">Terraço Sky Bar & Restaurant - Khách sạn La Sin fonía Del Rey Hotel & Spa</a>
                                <div class="between-restaurant-frames-text-danh-gia">
                                    <div class="restaurant-frames-text-danh-gia">
                                        <div class="restaurant-frames-text-danh-gia-icon1">
                                            <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                        </div>
                                        <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                        <div class="restaurant-frames-text-danh-gia-icon2">
                                            <img src="assets/images/icon/star.svg" alt="">
                                        </div>
                                    </div>
                                    <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                    <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                </div>
                                <div class="restaurant-moinhat-address">
                                    <div class="restaurant-moinhat-text-address-img">
                                        <img src="assets/images/icon/address.svg" alt="">
                                    </div>
                                    <div class="restaurant-moinhat-text-address-text elipsis2">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang, Việt Nam</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_lats-frames_sub">
                            <div class="content_lats-frames_sub-img">
                                <img src="assets/images/img4.png" alt="">
                            </div>
                            <div class="content_lats-frames_sub-main">
                                <a href="#" class="content_lats-frames_sub-main-heading elipsis3">Terraço Sky Bar & Restaurant - Khách sạn La Sin fonía Del Rey Hotel & Spa</a>
                                <div class="between-restaurant-frames-text-danh-gia">
                                    <div class="restaurant-frames-text-danh-gia">
                                        <div class="restaurant-frames-text-danh-gia-icon1">
                                            <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                        </div>
                                        <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                        <div class="restaurant-frames-text-danh-gia-icon2">
                                            <img src="assets/images/icon/star.svg" alt="">
                                        </div>
                                    </div>
                                    <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                    <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                </div>
                                <div class="restaurant-moinhat-address">
                                    <div class="restaurant-moinhat-text-address-img">
                                        <img src="assets/images/icon/address.svg" alt="">
                                    </div>
                                    <div class="restaurant-moinhat-text-address-text elipsis2">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang, Việt Nam</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_lats-frames_sub">
                            <div class="content_lats-frames_sub-img">
                                <img src="assets/images/img5.png" alt="">
                            </div>
                            <div class="content_lats-frames_sub-main">
                                <a href="#" class="content_lats-frames_sub-main-heading elipsis3">Terraço Sky Bar & Restaurant - Khách sạn La Sin fonía Del Rey Hotel & Spa</a>
                                <div class="between-restaurant-frames-text-danh-gia">
                                    <div class="restaurant-frames-text-danh-gia">
                                        <div class="restaurant-frames-text-danh-gia-icon1">
                                            <img src="assets/images/icon/danhgia_pen.svg" alt="">
                                        </div>
                                        <div class="restaurant-frames-text-danh-gia-text">4.2</div>
                                        <div class="restaurant-frames-text-danh-gia-icon2">
                                            <img src="assets/images/icon/star.svg" alt="">
                                        </div>
                                    </div>
                                    <p class="between-restaurant-frames-text-danh-gia-text">Tuyệt vời</p>
                                    <p class="between-restaurant-frames-text-danh-gia-numeber">(156 đánh giá)</p>
                                </div>
                                <div class="restaurant-moinhat-address">
                                    <div class="restaurant-moinhat-text-address-img">
                                        <img src="assets/images/icon/address.svg" alt="">
                                    </div>
                                    <div class="restaurant-moinhat-text-address-text elipsis2">64, Trần Hưng Đạo, Phú Quốc, Kiên Giang, Việt Nam</div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div>

@endsection
