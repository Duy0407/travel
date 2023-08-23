$(document).ready(function(){
  //======================================== Slick danh mục (Trang chủ nhà hàng)
  $('.CategoryRestaurant').slick({
    dots: false,
    slidesToShow: 8,
    slidesToScroll: 1,
    prevArrow: '<div class="slick-prev prev-arrow"><img src="assets/images/icon/slickPrev.svg" alt="" /></div>',
    nextArrow: '<div class="slick-next next-arrow"><img src="assets/images/icon/slickNext.svg" alt="" /></div>',
  })

  //======================================== Slick nhà hàng nổi bật (Trang chủ nhà hàng)
  var FeaturedRestaurant = document.querySelectorAll('.between-restaurant-frames-sub');
  if (FeaturedRestaurant.length > 2) {
    $('.FeaturedRestaurant').slick({
      dots: true,
      slidesToShow: 2,
      slidesToScroll: 2,
    })
  }

  //======================================== Slick xem gần đây (Trang chủ nhà hàng)
  var RecentlyViewedRestaurant = document.querySelectorAll('.content_lats-frames_sub');
  if (RecentlyViewedRestaurant.length > 4) {
    $('.RecentlyViewedRestaurant').slick({
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 4,
    })
  }

  //======================================== CHECK EMAIL
  $.validator.addMethod("CheckEmail", function (value, element) {
    return this.optional(element) || /^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/i.test(value);
  }, "Hãy nhập đúng định dạng email");
  //======================================== CHECK SĐT
  $.validator.addMethod("CheckPhone", function (value, element) {
    return this.optional(element) || /^(032|033|034|035|036|037|038|039|086|096|097|098|081|082|083|084|085|088|091|094|056|058|092|070|076|077|078|079|089|090|093|099|059)+([0-9]{7})$/i.test(value);
  }, "Hãy nhập đúng định dạng số điện thoại");
  //======================================== CHECK KÝ TỰ ĐẶC BIỆT
  $.validator.addMethod("noSpecialChars", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9 \u00C0-\u1EF9]*$/.test(value);
  }, "Họ và tên không được chứa ký tự đặc biệt");

  var popupErrorEmail = document.querySelector('.popupErrorEmail');
  if (popupErrorEmail) {
    setTimeout(function() {
      $('.popupErrorEmail').remove();
    }, 5000);
  }
});

//======================================== Click ảnh đại điện nhà hàng
function AvatarRestaurant(ClickAvatar){
  $('.AvatarRestaurant').click();
}
var targetAvatarRestaurant = document.querySelector('.targetAvatarRestaurant');
$('.AvatarRestaurant').change(function(){
  loadImage(this, targetAvatarRestaurant);
});

//======================================== CLICK NAVIGATE RESTAURANT MANAGER
function resNaviManager(a, b, c, d){
  $(a).hide();
  $(b).show();
  $(c).removeClass('border_blue');
  $(d).addClass('border_blue');
}

//======================================== Click Danh mục Restaurant (Tạo nhà hàng)
function clickType(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var idCate = $(element).parents('.getIdCate').attr('data-id');
  document.querySelector('.idCate').value = idCate;
}

//======================================== Gọi API lấy quận huyện từ id của thành phố
$('#ThanhPho').change(function(){
    if ($(this).val() != "") {
      var cityId = $(this).val();
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url: "api/district",
        type: "POST",
        data:{cityId:cityId, _token:_token},
        success:function(result)
        {
          $('#QuanHuyen').empty();
          $('#QuanHuyen').append($('<option>').text('Chọn').attr('value', ''));
          $.each(result, function(index, district){
            $('#QuanHuyen').append($('<option>').text(district.cit_name).attr('value', district.cit_id));
          });
        }
      })
    }
});



// ************************************************************************************************************************************************************************
function click_rotate(rotate) {
  $(rotate).parents('.prents_div').find('.main-noidung-left-padding-head-img').toggleClass('rotate_d');
  $(rotate).parents('.prents_div').find('.hide_content').slideToggle();
}
function show_border(hien_border) {
  $('.s_restaurant-main-noidung-sub_sub1-text').removeClass('border_bottom');
  $('.s_restaurant-main-noidung-sub_sub1-text').removeClass('color_tex_border');
  $(hien_border).addClass('border_bottom');
  $(hien_border).addClass('color_tex_border');
}

// SHOW POPUP GIỜ MỞ CỬA
$('.show_gio').click(function () {
  $(this).parents('.noidung-chinh-padding-khoitext1-giomocua').find('.pp_giomocua').toggle(500);
})

// ICON HEART
$(".icon_heart").click(function () {
  $(this).toggleClass('heart_fill');
})

// THU GỌN
$('.thugon').click(function () {
  $('.prents_div').toggle(500);
  $('.main-noidung-left-padding-thugon-ic-img').toggleClass('rotate_d');
})

// TIM MÓN ĂN
$('.cl_tim_monan').click(function () {
  $(this).toggleClass('bg_tim_monan');
  $(this).parents('.detail_restaurant-content-main-monan-div').find('.detail_restaurant-monan-div-img-tim-tex').toggleClass('error');
});
// Tạo nhà hàng
function xoay(cl_xoay) {
  $('.create_restaurant-main-left-noidung-chung').removeClass('active_xoay');
  $('.create_restaurant-main-left-noidung-chung').removeClass('text_blue');
  $(cl_xoay).addClass('active_xoay');
  $(cl_xoay).addClass('text_blue');
}

// Thông tn chung
$('.tnh1').click(function () {
  $('.create_restaurant-main-right-ttc').removeClass('hidden');
  $('.create_restaurant-convenient-policy').addClass('hidden');
  $('.create_restaurant-main-right-sp').addClass('hidden');
  $('.create_restaurant-main-right-photo').addClass('hidden');
});
// Tiện nghi & chính sách
$('.tnh2').click(function () {
  $('.create_restaurant-main-right-ttc').addClass('hidden');
  $('.create_restaurant-convenient-policy').removeClass('hidden');
  $('.create_restaurant-main-right-sp').addClass('hidden');
  $('.create_restaurant-main-right-photo').addClass('hidden');
});

// Thiết lập sản phẩm
$('.tnh3').click(function () {
  $('.create_restaurant-main-right-ttc').addClass('hidden');
  $('.create_restaurant-convenient-policy').addClass('hidden');

  $('.listPorduct').removeClass('hidden');
  $('.create_product').addClass('hidden');

  $('.create_restaurant-main-right-photo').addClass('hidden');
});

// Click Show Layout Thêm sản phẩm
$('.showLayoutAddProduct').click(function () {
  $(this).parents('.listPorduct').addClass('hidden')
  $('.create_product').removeClass('hidden');
})
$('.back_sp').click(function () {
  $('.create_product').addClass('hidden');
  $('.listPorduct').removeClass('hidden')
});

// Hàm Thay đổi ảnh
function loadImage(input, output) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(output).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}


// HTML Thêm sản phẩm
var html = 
`<div class="create_product-padding2-info-sp parent_con siblingsParent getValueProduct">
<div class="create_product-padding2-info-sp-avatar">
<div class="create_product-padding2-info-sp-avatar-tex">Ảnh sản phẩm <span class="error">*</span></div>
<div class="size_anh framesProduct">
<div class="khung_img2 cusor clickAvatarProduct">
<img src="assets/images/khung_avatar2.svg" alt="" class="img2 avatarProduct">
</div>
<input type="file" class="hidden changeAvatarProduct" name="productAvatar">
</div>
</div>
<div class="create_product-padding2-info-nhap">
<div class="create_product-padding2-info-nhap-sub-nav">
<div class="create_product-padding2-info-nhap-sub-2">
<div class="create_product-padding2-info-nhap-sub1">
<div class="create_product-padding2-info-nhap-sub1-tex">Tên sản phẩm <span class="error">*</span></div>
<div class="create_product-padding2-info-nhap-sub1-input parentInput">
<input type="text" placeholder="Nhập" name="productName">
</div>
</div>
<div class="create_product-padding2-info-nhap-sub1">
<div class="create_product-padding2-info-nhap-sub1-tex">Giá sản phẩm (VNĐ)<span class="error">*</span>
</div>
<div class="create_product-padding2-info-nhap-sub1-input parentInput">
<input type="number" placeholder="Nhập" name="productPrice">
</div>
</div>
</div>
<div class="create_product-padding2-info-nhap-sub1-delete" onclick="removeProduct(this)">
<img src="assets/images/icon/delete.svg" alt="">
</div>
</div>
<div class="create_product-padding2-info-nhap-mota">
<div class="create_product-padding2-info-nhap-mota-tex">Mô tả</div>
<div class="create_product-padding2-info-nhap-mota-tex-nhap parentInput">
<textarea name="productDescribe" id="" placeholder="Mô tả ngắn về sản phẩm"></textarea>
</div>
</div>
</div>
</div>`;

// Click thêm layout sản phẩm 
$(document).on('click', '.addProduct', function(){
  $(this).parents('.create_product-padding2').children('.parent_div').append(html);
})
// $('.addProduct').click(function () {
//   $(this).parents('.create_product-padding2').children('.parent_div').append(html);
// })

// click xóa layout sản phẩm 
function removeProduct(a) {
  $(a).parents('.parent_con').remove();
}

// Click Avatar Category
$('.clickAvatarCategory').click(function () {
  $('.changeAvatarCategory').click();
})

$('.changeAvatarCategory').change(function () {
  loadImage(this, ".avatarCategory");
});

// Click Avarar Product
$(document).on('click', '.clickAvatarProduct', function () {
  var changeInputFile =  $(this).siblings('.changeAvatarProduct');
  changeInputFile.click();

  changeInputFile.change(function (){
    var avatarProduct = $(this).closest('.framesProduct').find('.avatarProduct');
    loadImage(this, avatarProduct);
  })
});










// Thay ảnh file sửa nhà hàng
function thayanh(thay) {
  $('.input_thay').click();
}
$('.input_thay').change(function () {
  loadImage(this, ".anhthay");
})



// Thư viện ảnh
$('.tnh4').click(function () {
  $('.create_restaurant-main-right-ttc').addClass('hidden');
  $('.create_restaurant-convenient-policy').addClass('hidden');
  $('.create_restaurant-main-right-sp').addClass('hidden');
  $('.create_restaurant-main-right-photo').removeClass('hidden');
});
// upload img
$('.upload-function-insert-img-title').click(function () {
  $('.files').click();
})

// Tạo mới nhà hàng / click border
// function border_blue(click_border) {
//   $('.new_restaurant-content-noidung-head1').removeClass('text_blue');
//   $('.new_restaurant-content-noidung-head1').removeClass('border_blue');
//   $(click_border).addClass('text_blue');
//   $(click_border).addClass('border_blue');
// }

function border_blue(a, b, c, d) {
  $(a).hide();
  $(b).show();
  $(c).removeClass('border_blue');
  $(d).addClass('border_blue');
}
// Tạo khuyến mãi
$('#checkbox_calendar').click(function () {
  if ($(this).is(':checked')) {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').show()

  } else {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').hide()
  }
})
// -----------------------------------

// Áp dụng theo thứ trong tuần
$('#checkbox_calendar1').click(function () {
  if ($(this).is(':checked')) {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').show()
    $("input[name='bathroom_click']").prop('checked', true);
    $('.create-promotion-restaurant-click-week').removeClass('hidden');
  } else {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').hide()
    $("input[name='bathroom_click']").prop('checked', false);
    $('.create-promotion-restaurant-click-week').addClass('hidden');

  }
})
$("input[name='bathroom_click']").click(function () {

  var i = 0;
  $("input[name='bathroom_click']").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 7) {
    $("#checkbox_calendar1").prop('checked', true);
    $('#checkbox_calendar1').addClass('border_yellow');
  } else {
    $("#checkbox_calendar1").prop('checked', false);
    $('#checkbox_calendar1').removeClass('border_yellow');
  }
})
// --------------------------------------------

// Áp dụng theo khung giờ
$('#checkbox_calendar2').click(function () {
  if ($(this).is(':checked')) {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').show()
    $('.create-promotion-restaurant-click-time').removeClass('hidden')
  } else {
    $(this).toggleClass('border_yellow');
    $('.calendar_choose-basic-price-hidden').hide()
    $('.create-promotion-restaurant-click-time').addClass('hidden')
  }
})

var appen_khungtime = '<div class="create-promotion-restaurant-click-khung-time-fig parent_con"><div class="create-promotion-restaurant-click-khung-time-sub"><div class="create-promotion-restaurant-click-khung-time-tex">Thời điểm bắt đầu</div><div class="create-promotion-restaurant-click-khung-time-input"><input type="time"></div></div><div class="create-promotion-restaurant-click-khung-time-sub"><div class="create-promotion-restaurant-click-khung-time-tex">Thời điểm kết thúc</div><div class="create-promotion-restaurant-click-khung-time-input"><input type="time"></div></div><div class="time_delete cusor" onclick="removeProduct(this)"><img src="assets/images/icon/delete.svg" alt=""></div></div>';

$('.click_appen').click(function () {
  $(this).parents('.create-promotion-restaurant-click-time').find('.appen_html_khungtime').append(appen_khungtime);
});

// -----------------------------------
// ÁP DỤNG VỚI
$("#hoadon").click(function () {
  $('.show_ad_category').hide();
  $('.show_ad_product').hide();
});
$("#danhmuc").click(function () {
  $('.show_ad_category').show();
  $('.show_ad_product').hide();
});
$("#sanpham").click(function () {
  $('.show_ad_category').hide();
  $('.show_ad_product').show();
})
// Khuyễn mãi theo số tiền
$('#bat_vl_km').change(function () {
  var km = $("#bat_vl_km").val();
  if (km == 1) {
    $('.create-promotion-restaurant-kmtpt').removeClass('hidden');
    $('.create-promotion-restaurant-kmtst').addClass('hidden');
    $('.create-promotion-restaurant-kmdg').addClass('hidden');
    $('.create-promotion-restaurant-kmtm').addClass('hidden');

    $('#hoadon').prop('disabled', false);
    $('#hoadon').prop('checked', true);
    $('.hoadon').removeClass('opaciry_04');
    $('.show_ad_receipt').hide();
    $('.show_ad_category').hide();
    $('.show_ad_product').hide();

    $('#danhmuc').prop('checked', false);
    $('#danhmuc').prop('disabled', false);
    $('.danhmuc').removeClass('opaciry_04');

    $("#sanpham").click(function () {
      $('.show_ad_product').show();
    })

  } else if (km == 2) {
    $('.create-promotion-restaurant-kmtpt').addClass('hidden');
    $('.create-promotion-restaurant-kmtst').removeClass('hidden');
    $('.create-promotion-restaurant-kmdg').addClass('hidden');
    $('.create-promotion-restaurant-kmtm').addClass('hidden');

    $('#hoadon').prop('disabled', false);
    $('#hoadon').prop('checked', true);
    $('.hoadon').removeClass('opaciry_04');
    $('.show_ad_receipt').hide();
    $('.show_ad_category').hide();
    $('.show_ad_product').hide();

    $('#danhmuc').prop('checked', false);
    $('#danhmuc').prop('disabled', false);
    $('.danhmuc').removeClass('opaciry_04');


    $("#sanpham").click(function () {
      $('.show_ad_product').show();
    })
  } else if (km == 3) {
    $('.create-promotion-restaurant-kmtpt').addClass('hidden');
    $('.create-promotion-restaurant-kmtst').addClass('hidden');
    $('.create-promotion-restaurant-kmdg').removeClass('hidden');
    $('.create-promotion-restaurant-kmtm').addClass('hidden');

    $('#hoadon').prop('disabled', true);
    $('#hoadon').prop('checked', false);
    $('#danhmuc').prop('checked', true);
    $('#danhmuc').prop('disabled', false);
    $('.hoadon').addClass('opaciry_04');
    $('.danhmuc').removeClass('opaciry_04');

    $('.show_ad_receipt').hide();
    $('.show_ad_category').show();
    $('.show_ad_product').hide();



    $("#sanpham").click(function () {
      $('.show_ad_product').show();
      // $(this).removeClass('spadkm');
    })

  } else if (km == 4) {
    $('.create-promotion-restaurant-kmtpt').addClass('hidden');
    $('.create-promotion-restaurant-kmtst').addClass('hidden');
    $('.create-promotion-restaurant-kmdg').addClass('hidden');
    $('.create-promotion-restaurant-kmtm').removeClass('hidden');

    $('#hoadon').prop('disabled', false);
    $('#hoadon').prop('checked', true);
    $('#danhmuc').prop('checked', false);
    $('#danhmuc').prop('disabled', true);
    $('.hoadon').removeClass('opaciry_04');
    $('.danhmuc').addClass('opaciry_04');

    $('.show_ad_receipt').show();
    $('.show_ad_category').hide();
    $('.show_ad_product').hide();


    $("#sanpham").click(function () {
      // $(this).addClass('spadkm');
      $('.show_ad_product').hide();
    })
    $('.kmtm1').hide();
    $('.spadkm').click(function () {
      // alert(1);
      $('.kmtm1').show();
    })

  }
});

// Show trả lời
$('.comment_restaurant-two-user-text-icon-text').click(function () {

  $(this).parents('.comment_restaurant-two-user-padding').find('.answer-comment-user').toggleClass('hidden');
})

$('.answer-comment-user-text-hide-text').click(function () {
  $(this).parents('.answer-comment-user').addClass('hidden')

})


// CHUYẾN XE
// ---------------------------------------
$('.cx_click_img').click(function () {
  $('.ip_file').click();
});
$('.ip_file').change(function () {
  loadImage(this, ".cx_thay_img");
});
// ---------------------------------------
$('.cx_click_img1').click(function(){
  $('.ip_file1').click();
});
$('.ip_file1').change(function(){
  loadImage(this, ".cx_click_img1");
})

// appen địa chỉ công ty, luồng chuyến xe page tạo nhà xe(thông tin chung)
var address_cx = `<div class="create_restaurant-main-right-three-padding cx parent_con">
<div class="duy_create_div1">
    <div class="create_restaurant-main-right-three-padding-hd">Địa chỉ công ty</div>
    <div class="duy_create_div1-ic-xoa cusor" onclick="removeProduct(this)"><img src="assets/images/icon/delete.svg" alt=""></div>
</div>
<div class="create_restaurant-main-right-three-padding-sub">
    <div class="create_restaurant-main-right-three-left">
        <div class="create_restaurant-main-right-three-left1">
            <div class="create_restaurant-main-right-three-left1-sub">
                <div class="create_restaurant-right-two-box-left-sub-tex">Quốc gia <span class="error">*</span></div>
                <div class="create_restaurant-right-three-left1-sub-select">
                    <select name="" id="" class="select_option">
                        <option value="">Việt Nam</option>
                    </select>
                </div>
            </div>
            <div class="create_restaurant-main-right-three-left1-sub">
                <div class="create_restaurant-right-two-box-left-sub-tex">Tỉnh/Thành phố <span class="error">*</span></div>
                <div class="create_restaurant-right-three-left1-sub-select">
                    <select name="" id="" class="select_option">
                        <option value="">Chọn</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="create_restaurant-main-right-three-left1">
            <div class="create_restaurant-main-right-three-left1-sub">
                <div class="create_restaurant-right-two-box-left-sub-tex">Quận/Huyện <span class="error">*</span></div>
                <div class="create_restaurant-right-three-left1-sub-select">
                    <select name="" id="" class="select_option">
                        <option value="">Chọn</option>
                    </select>
                </div>
            </div>
            <div class="create_restaurant-main-right-three-left1-sub">
                <div class="create_restaurant-right-two-box-left-sub-tex">Đường</div>
                <div class="create_restaurant-right-three-left1-sub-select">
                    <select name="" id="" class="select_option">
                        <option value="">Chọn</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="create_restaurant-main-right-three-left2">
            <div class="create_restaurant-right-two-box-left-sub-tex">Địa chỉ chi tiết</div>
            <div class="create_restaurant-main-right-three-left2-input">
                <input type="text" placeholder="Nhập địa chỉ chi tiết">
            </div>
        </div>
    </div>
    <div class="create_restaurant-main-right-three-right">
        <div class="create_restaurant-right-two-box-left-sub-tex">Định vị trên bản đồ <span class="error">*</span></div>
        <div class="create_restaurant-main-right-three-right-map">
            <img src="/images/restaurant/map.png" alt="">
        </div>
    </div>
</div>
</div>`;

$('.click_them_add_cx').click(function(){
  $(this).parents('.create_restaurant-main-right-three').append(address_cx);
  $(".select_option").select2({
      width: "100%",
  });
});

function lai_xe(a,b,c,d){
  $(a).removeClass('border_color_nx');
  $(b).addClass('border_color_nx');
  $(c).hide();
  $(d).show();
};

$('.show_pp_tp').click(function(){
  $('.pp_tk_tp').toggle(500);
});


$('.cl_show_hoanhuy').click(function(){
  $('.pp_hoan_huy').toggle(500);
})
$('.close_hoanhuy').click(function(){
  $('.pp_hoan_huy').hide();
})