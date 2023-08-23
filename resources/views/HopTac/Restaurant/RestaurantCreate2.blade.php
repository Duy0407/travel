<div class="create_restaurant-convenient-policy side_chung divCreate2">
    <form action="" method="POST">
        @csrf
        <div class="create_restaurant-main-right-convenient">
            <div class="create_restaurant-right-convenient-padding">
                <div class="create_restaurant-right-convenient-title">Tiện nghi và dịch vụ</div>

                <div class="create_restaurant-right-convenient-check">
                    @foreach($amenitiesServices as $amenitiesService)
                        <div class="create_restaurant-right-convenient-check-sub">
                            <div class="create_restaurant-convenient-check-input">
                                <input type="checkbox" value="{{$amenitiesService->id}}" name="inputCheckBox">
                                <div class="checkbox-text">{{$amenitiesService->name_tiennghi}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="create_restaurant-main-right-policy">
            <div class="create_restaurant-right-policy-padding">
                <div class="create_restaurant-right-policy-title">
                    <div class="create_restaurant-right-policy-title-main">Chính sách</div>
                    <p class="create_restaurant-right-policy-title-sub">Khách hàng có thể biết được chính sách của nhà hàng của bạn tại đây</p>
                </div>
                <textarea name="policy" id="" placeholder="Nhập chính sách"></textarea>
            </div>
        </div>

        <div class="create_restaurant-main-right-button">
            <button type="submit" class="create_restaurant-main-right-button1">Bỏ qua</button>
            <button type="button" class="create_restaurant-main-right-button2" name="FormRestaurant" onclick="SaveAmenitiesPolicy()">Lưu lại</button>
        </div>
    </form>
</div>