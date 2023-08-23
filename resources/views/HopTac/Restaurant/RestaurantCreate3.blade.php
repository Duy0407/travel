<div class="create_restaurant-main-right-sp side_chung divCreate3">
    <!-- Danh sách sản phẩm được thêm -->
    <div class="create_restaurant-main-right-sp-hed listPorduct ">
        <div class="create_restaurant-main-right-sp-title">Danh mục sản phẩm</div>
        <div class="create_restaurant-main-right-sp-sub">
            <div class="create_restaurant-main-right-sp-padding">
                <div class="create_restaurant-right-sp-padding-title">
                    <div class="create_restaurant-right-sp-padding-title1">[012354] Món khai vị</div>
                    <div class="create_restaurant-right-sp-padding-p">
                        <p>Số lượng:</p>
                        <span>14 sản phẩm</span>
                    </div>
                </div>
                <div class="create_restaurant-right-sp-img responsive">
                    <?php for ($i = 0; $i < 18; $i++) : ?>
                        <img src="assets/images/img11.png" alt="">
                    <?php endfor; ?>
                </div>
                <div class="create_restaurant-right-sp-chinhsua">
                    <div class="create_restaurant-right-sp-chinhsua-btn cusor text_blue">Chỉnh sửa</div>
                    <div class="create_restaurant-right-sp-chinhsua-icon cusor">
                        <img src="assets/images/icon/delete.svg" alt="">
                    </div>
                </div>
            </div>


            <div class="create_restaurant-main-right-sp-padding1">
                <div class="create_restaurant-main-right-sp-padding1-them">
                    <div class="create_restaurant-main-right-sp-padding1-sub cusor showLayoutAddProduct">
                        <div class="create_restaurant-main-right-sp-padding1-img">
                            <img src="assets/images/icon/themsp.svg" alt="">
                        </div>
                        <div class="create_restaurant-main-right-sp-padding1-text text_blue">Thêm danh mục sản phẩm</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    @include('HopTac.Restaurant.RestaurantCreate3CategoryAndProduct')
</div>