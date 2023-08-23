<div class="create_restaurant-main-right-ttc side_chung divCreate1">
    <form action="" method="POST" enctype="multipart/form-data" id="AddRestaurant1">
        @csrf
        <div class="create_restaurant-main-right-one">
            <div class="create_restaurant-main-right-one-padding">
                <div class="create_restaurant-right-one-padding-heding">Chọn loại hình kinh doanh</div>
                <div class="create_restaurant-right-one-padding-block">
                    <div class="create_restaurant-right-one-block-left">
                        <div class="create_restaurant-right-one-block-left-fig">

                            @foreach($businessType as $type)
                                <div class="create_restaurant-right-one-block-left-sub">
                                    <div class="create_restaurant-right-one-block-left-img getIdCate" data-id="{{$type->id}}">
                                        <img src="assets/images/{{$type->image}}" alt="" onclick="clickType(this)">
                                    </div>
                                    <div class="create_restaurant-right-one-block-left-tex">{{$type->name}}</div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div id="modal01" class="create_restaurant-right-one-block-right parentInput">
                        <div class="create_restaurant-right-one-block-right-circle">
                            <img id="img01" src="assets/images/Ellipse_88.png" alt="">
                        </div>
                        <input type="hidden" value="" class="idCate" name="typeRestaurant">
                        <div class="d_flex just_c_c">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="create_restaurant-main-right-two">
            <div class="create_restaurant-right-two-padding">
                <div class="create_restaurant-right-two-box">
                    <div class="create_restaurant-right-two-box-left">
                        <div class="create_restaurant-right-two-box-left-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Tên nhà hàng <span class="error">*</span></div>
                            <div class="create_restaurant-right-two-box-left-sub-input parentInput">
                                <input type="text" placeholder="Nhập tên nhà hàng" name="name">
                            </div>
                        </div>
                        <div class="create_restaurant-right-two-box-left-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Dịch vụ <span class="error">*</span></div>
                            <div class="create_restaurant-right-two-box-left-sub-select parentInput">
                                <select name="service" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Chọn dịch vụ</option>
                                    <option value="1">Đặt bàn</option>
                                    <option value="2">Giao món</option>
                                    <option value="3">Lấy hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="create_restaurant-right-two-box-left-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Ẩm thực <span class="error">*</span></div>
                            <div class="create_restaurant-right-two-box-left-sub-select parentInput">
                                <select name="cuisine" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Chọn</option>
                                        @foreach($cuisines as $cuisine)
                                            <option value="{{$cuisine->id}}">{{$cuisine->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="create_restaurant-right-two-box-left-time">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Thời gian mở cửa từ - đến <span class="error">*</span></div>
                            <div class="create_restaurant-right-two-box-left-time-sub">
                                <div class="create_restaurant-right-two-box-left-time-input parentInput">
                                    <input type="time" name="timeStart">
                                </div>
                                <div class="create_restaurant-right-two-box-left-time-input parentInput">
                                    <input type="time" name="timeEnd">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="create_restaurant-right-two-box-right">
                        <div class="create_restaurant-right-two-box-left-sub-tex">Ảnh đại diện <span class="error">*</span></div>
                        <div class="create_restaurant-right-two-box-right-sub">
                            <input type="file" class="AvatarRestaurant hidden" name="restaurantAvatar">
                            <div class="create_restaurant-right-two-box-right-img cusor" onclick="AvatarRestaurant(this)">
                                <img src="assets/images/icon/themanh.svg" alt="" class="targetAvatarRestaurant">
                            </div>
                            <div class="create_restaurant-right-two-box-right-p">
                                <p class="pcreate_restaurant-right-two-box-right-tex1">Dung lượng tối đa: 5 MB</p>
                                <p class="pcreate_restaurant-right-two-box-right-tex1">Phân giải tối thiểu: 1920x1080</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="create_restaurant-main-right-three">
            <div class="create_restaurant-main-right-three-padding">
                <div class="create_restaurant-main-right-three-padding-hd">Địa chỉ</div>
                <div class="create_restaurant-main-right-three-padding-sub">
                    <div class="create_restaurant-main-right-three-left">

                        <div class="create_restaurant-main-right-three-left1">
                            <div class="create_restaurant-main-right-three-left1-sub">
                                <div class="create_restaurant-right-two-box-left-sub-tex">Tỉnh/Thành phố <span class="error">*</span></div>
                                <div class="create_restaurant-right-three-left1-sub-select parentInput">
                                    <select name="city" id="ThanhPho" class="select_option">
                                        <option value="">Chọn</option>
                                        @foreach($citys as $city)
                                            <option value="{{$city->cit_id}}">{{$city->cit_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="create_restaurant-main-right-three-left1-sub">
                                <div class="create_restaurant-right-two-box-left-sub-tex">Quận/Huyện <span class="error">*</span></div>
                                <div class="create_restaurant-right-three-left1-sub-select parentInput">
                                    <select name="district" id="QuanHuyen" class="select_option">
                                        <option value="">Chọn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="create_restaurant-main-right-three-left2">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Địa chỉ chi tiết</div>
                            <div class="create_restaurant-main-right-three-left2-input parentInput">
                                <input type="text" placeholder="Nhập địa chỉ chi tiết" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="create_restaurant-main-right-three-right">
                        <div class="create_restaurant-right-two-box-left-sub-tex">Định vị trên bản đồ <span class="error">*</span></div>
                        <div class="create_restaurant-main-right-three-right-map">
                            <img src="assets/images/map.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="create_restaurant-main-right-four">
            <div class="create_restaurant-main-right-four-padding">
                <div class="create_restaurant-main-right-four-heading">Giới thiệu nhà hàng <span class="error">*</span></div>
                <div class="create_restaurant-main-right-four-gioithieu parentInput">
                    <textarea name="describe" class="dessRestaurant" cols="30" rows="5" placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
        </div>

        <!-- <div class="create_restaurant-main-right-five">
            <div class="create_restaurant-main-right-five-sub">
                <div class="create_restaurant-main-right-five-padding">
                    <div class="create_restaurant-main-right-five-heading">Thông tin liên hệ chính</div>
                    <div class="create_restaurant-main-right-five-info">
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Họ và tên <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Số điện thoại <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Email <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Nhập email">
                            </div>
                        </div>

                        <div class="create_restaurant-main-right-five-show-pp">Thêm Email người nhận</div>

                        <div class="create_restaurant-main-right-five-check">
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có đơn phòng mới</div>
                            </div>
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có thay đổi trạng thái đơn</div>
                            </div>
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có nhận xét mới</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="create_restaurant-main-right-five-padding">
                    <div class="create_restaurant-main-right-five-heading">Bộ phận quản lý</div>
                    <div class="create_restaurant-main-right-five-info">
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Họ và tên <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Số điện thoại <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="create_restaurant-main-right-five-info-sub">
                            <div class="create_restaurant-right-two-box-left-sub-tex">Email <span class="error">*</span></div>
                            <div class="create_restaurant-main-right-five-info-input">
                                <input type="text" placeholder="Nhập email">
                            </div>
                        </div>

                        <div class="create_restaurant-main-right-five-show-pp">Thêm Email người nhận</div>

                        <div class="create_restaurant-main-right-five-check">
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có đơn phòng mới</div>
                            </div>
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có thay đổi trạng thái đơn</div>
                            </div>
                            <div class="create_restaurant-main-right-five-check-sub">
                                <div class="create_restaurant-main-right-five-check-input">
                                    <input type="checkbox">
                                </div>
                                <div class="create_restaurant-main-right-five-check-text text_blue">Khi có nhận xét mới</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="create_restaurant-main-right-button d_flex">
            <div class="create_restaurant-main-right-button1">Bỏ qua</div>
            <button type="button" class="create_restaurant-main-right-button2" name="FormRestaurant" value="submit1" id="Restaurant1" onclick="saveRestaurant()">Lưu lại</button>
        </div>
    </form>
</div>
