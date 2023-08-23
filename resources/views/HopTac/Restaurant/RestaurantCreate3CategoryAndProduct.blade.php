<!-- Thêm sản phẩm -->
<div class="create_product hidden">
    <form action="" id="ProductSetup">
        <div class="create_product-padding">
            <div class="create_product-padding-heading">Danh mục sản phẩm</div>
            <div class="create_product-padding-info">
                <div class="create_product-padding-info-avatar">
                    <div class="create_product-padding-info-avatar-text">Ảnh đại diện <span class="errorValidate">*</span></div>
                    <div class="khung_img cusor clickAvatarCategory">
                        <img src="assets/images/icon/khung_avatar.svg" alt="" class="img1 avatarCategory">
                    </div>
                    <input type="file" class="hidden changeAvatarCategory" name="categoryFile">
                </div>
                <div class="create_product-padding-info-nhap">
                    <div class="create_product-padding-info-nhap-tex">Tên danh mục sản phẩm <span class="errorValidate">*</span></div>
                    <div class="create_product-padding-info-nhap-input parentInput">
                        <input type="text" placeholder="Nhập" name="categoryName">
                    </div>
                </div>
            </div>
        </div>
        <div class="create_product-padding2">
            <div class="create_product-padding2-tex">
                <p class="create_product-padding2-tex1 error">Điều kiện chọn ảnh:</p>
                <div class="create_product-padding2-tex-sub">
                    <p class="create_product-padding2-tex2">Dung lượng tối đa: 5 MB</p>
                    <p class="create_product-padding2-tex2">Phân giải tối thiểu: 600x600 px</p>
                </div>
            </div>
            <div class="create_product-padding2-title">Sản phẩm</div>

            <div class="them-div-tao-them-moi parent_div">

                <div class="create_product-padding2-info-sp siblingsParent getValueProduct">
                    <div class="create_product-padding2-info-sp-avatar">
                        <div class="create_product-padding2-info-sp-avatar-tex">Ảnh sản phẩm <span class="errorValidate">*</span></div>
                        <div class="size_anh framesProduct">
                            <div class="khung_img2 cusor clickAvatarProduct">
                                <img src="assets/images/icon/khung_avatar2.svg" alt="" class="img2 avatarProduct">
                            </div>
                            <input type="file" class="hidden changeAvatarProduct" name="productAvatar">
                        </div>
                    </div>
                    <div class="create_product-padding2-info-nhap">
                        <div class="create_product-padding2-info-nhap-sub">
                            <div class="create_product-padding2-info-nhap-sub1">
                                <div class="create_product-padding2-info-nhap-sub1-tex">Tên sản phẩm <span class="errorValidate">*</span></div>
                                <div class="create_product-padding2-info-nhap-sub1-input parentInput">
                                    <input type="text" placeholder="Nhập" name="productName">
                                </div>
                            </div>
                            <div class="create_product-padding2-info-nhap-sub1">
                                <div class="create_product-padding2-info-nhap-sub1-tex">Giá sản phẩm (VNĐ) <span class="errorValidate">*</span></div>
                                <div class="create_product-padding2-info-nhap-sub1-input parentInput">
                                    <input type="number" placeholder="Nhập" name="productPrice">
                                </div>
                            </div>
                        </div>
                        <div class="create_product-padding2-info-nhap-mota">
                            <div class="create_product-padding2-info-nhap-mota-tex">Mô tả</div>
                            <div class="create_product-padding2-info-nhap-mota-tex-nhap parentInput">
                                <textarea name="productDescribe" id="" placeholder="Mô tả ngắn về sản phẩm"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>

            <div class="create_product-click-them-sp text_blue addProduct">
                <div class="create_product-click-them-sp-cong">+</div>
                <p>Thêm sản phẩm</p>
            </div>

        </div>

        <div class="create_restaurant-main-right-button">
            <button type="submit" class="create_restaurant-main-right-button1 back_sp">Bỏ qua</button>
            <button type="button" class="create_restaurant-main-right-button2" onclick="SaveProductSetup()">Lưu lại</button>
        </div>
    </form>
</div>