@extends('HopTac.master.master')
@section('title','Restaurant Manager')
@section('content')
<!-- Content -->
    <div class="new_restaurant-content">
        <div class="new_restaurant-content-padding">
            <div class="new_restaurant-content-head">
                <div class="new_restaurant-content-head-search">
                    <input type="text" placeholder="Tìm kiếm tên Nhà hàng">
                    <div class="ic_search">
                        <img src="assets/images/icon/search_gray.svg" alt="">
                    </div>
                </div>
                <a href="{{ route('createRestaurant') }}" class="new_restaurant-content-head-create">
                    <div class="new_restaurant-content-head-create-img">
                        <img src="assets/images/icon/cong.svg" alt="">
                    </div>
                    <div class="new_restaurant-content-head-create-text">Tạo mới</div>
                </a>
            </div>
            <div class="new_restaurant-content-noidung">
                <h1 class="new_restaurant-content-noidung-heading">Danh sách nhà hàng đang quản lý</h1>
                <div class="new_restaurant-content-noidung-padding">
                    <div class="new_restaurant-content-noidung-scroll">
                        <div class="new_restaurant-content-noidung-head">
                            <div class="new_restaurant-content-noidung-head1 navigateBorder border_blue" onclick="resNaviManager('.navigationChung', '.manager1', '.navigateBorder', this)">Đang hoạt động</div>
                            <div class="new_restaurant-content-noidung-head1 navigateBorder" onclick="resNaviManager('.navigationChung', '.manager2', '.navigateBorder', this)">Đang hoàn thiện</div>
                            <div class="new_restaurant-content-noidung-head1 navigateBorder" onclick="resNaviManager('.navigationChung', '.manager3', '.navigateBorder', this)">Ngừng hoạt động</div>
                        </div>
                    </div>

                    <!-- Đang hoạt động -->
                    @include('HopTac.Restaurant.RestaurantManagerActive')

                    <!-- Đang hoàn thiện -->
                    @include('HopTac.Restaurant.RestaurantManagerProgress')

                    <!-- Ngừng hoạt động -->
                    @include('HopTac.Restaurant.RestaurantManagerStop')

                </div>
            </div>
        </div>
    </div>
<!-- End Content -->

@endsection