@extends('HopTac.master.master')
@section('title','Thông tin chung')
@section('content')

<div class="create_restaurant-content">
    <div class="create_restaurant-content-padding">
        <div class="create_restaurant-content-padding-link">
            <div class="create_restaurant-content-padding-link-img"><img src="assets/images/icon/arrow-narrow-left.svg" alt=""></div>
            <div class="create_restaurant-content-padding-link-text">Quản lý nhà hàng</div>
        </div>
        <div class="create_restaurant-content-main">
            <div class="create_restaurant-main-left-heading">Tạo mới Nhà hàng</div>
            <div class="create_restaurant-content-main-sub">
                <div class="create_restaurant-main-left">
                    <div class="create_restaurant-main-left-noidung">
                        <div class="create_restaurant-main-left-noidung-chung sliderDiv sliderDiv1 cusor active_xoay text_blue" onclick="clickNavbar('.side_chung', '.divCreate1', '.sliderDiv', this)">
                            Thông tin chung
                        </div>
                        <div class="create_restaurant-main-left-noidung-chung sliderDiv sliderDiv2 cusor" onclick="clickNavbar('.side_chung', '.divCreate2', '.sliderDiv', this)">
                            Tiện nghi & chính sách
                        </div>
                        <div class="create_restaurant-main-left-noidung-chung sliderDiv sliderDiv3 cusor" onclick="clickNavbar('.side_chung', '.divCreate3', '.sliderDiv', this)">
                            Thiết lập sản phẩm
                        </div>
                        <div class="create_restaurant-main-left-noidung-chung sliderDiv sliderDiv4 cusor" onclick="clickNavbar('.side_chung', '.divCreate4', '.sliderDiv', this)">
                            Thư viện ảnh
                        </div>
                    </div>
                </div>
                <div class="create_restaurant-main-right setIdRestaurant" data-id="">
                    
                    <!-- Thông tin chung -->
                    @include('HopTac.Restaurant.RestaurantCreate1')
                    
                    <!-- Tiện nghi(convenient) & Chính sách(policy) -->
                    @include('HopTac.Restaurant.RestaurantCreate2')

                    <!-- Thiết lập sản phẩm -->
                    @include('HopTac.Restaurant.RestaurantCreate3')

                    <!-- Thư viện ảnh -->
                    @include('HopTac.Restaurant.RestaurantCreate4')

                </div>
            </div>
        </div>
    </div>
</div>

<script>
   let backButtonClicked = false;

window.addEventListener('popstate', function(event) {
  if (backButtonClicked) {
    // Hành động của bạn khi người dùng nhấn nút quay lại ở đây
    // Ví dụ: hiển thị thông báo, điều hướng lại trang, vv.
    alert('Bạn vừa nhấn nút quay lại!');
  }
  backButtonClicked = true;
});
  </script>
<script src="assets/js/validateRestaurant.js"></script>
@endsection  