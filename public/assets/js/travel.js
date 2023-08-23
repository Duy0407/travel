// Slick slider trang Travel
$('.travelSlider1').slick({
  dots: true,
  centerMode: false,
  centerPadding: '0px',
  slidesToShow: 3,
  prevArrow: '<button class="slick-prev prev-arrow"><img src="assets/images/icon/slickPrev.svg" alt="" /></button>',
  nextArrow: '<button class="slick-next next-arrow"><img src="assets/images/icon/slickNext.svg" alt="" /></button>',
})

$('.slickImg').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrow: true,
  autoplaySpeed: 2000,
  prevArrow: '<button class="slick-prev prev-arrow"><img src="assets/images/icon/slickPrev.svg" alt="" /></button>',
  nextArrow: '<button class="slick-next next-arrow"><img src="assets/images/icon/slickNext.svg" alt="" /></button>',
})



// -----------ngừng truy cập link
// $('.search_holtel-infor-map').click(function(){
//   event.preventDefault();
// })


$('.search_holtel-dishes-view-insert').click(function () {
  $('.search_holtel_utility').toggleClass('search_holtel_utility_active');
  var x = $('.search_holtel-dishes-view-insert').children('p')
  $(x).html() == "Xem thêm" ? $(x).html('Thu gọn') : $(x).html('Xem thêm');
  $(this).toggleClass('class_thugon')
  $('.click_xoay').toggleClass('rotation')
  $('.class_thugon').click(function () {
    $("html, body").animate({
      scrollTop: $('#trove').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
    }, 'slow');
  })
})

$('.search_holtel_type_khoi1-right-tien-ich').click(function () {
  $(this).toggleClass('rotation')
  $('.search_holtel_utility').toggleClass('search_holtel_utility_active');
  var x = $('.search_holtel-dishes-view-insert').children('p')
  $(x).html() == "Xem thêm" ? $(x).html('Thu gọn') : $(x).html('Xem thêm');
})
$('.search_holtel_type_khoi1-right').click(function () {
  $(this).parents('.search_holtel_type').find('.search_holtel_type_khoi2').toggle();
  $(this).toggleClass('rotation')
})
$('.search_holtel_evaluate-khoi1-right').click(function () {
  $(this).parents('.search_holtel_evaluate').find('.search_holtel_evaluate-khoi2').toggle();
  $(this).toggleClass('rotation')
})
$('.price_range-khoi1-img-click').click(function () {
  $(this).toggleClass('rotation')
  $('.search_holtel_price-text-hidden').toggle();
})

$('.search_holtel_menu').click(function () {
  $('.search_holtel_menu').removeClass('active_item')
  $(this).addClass('active_item')
})
// -------------
// $(document).on('input', '#slider', function() {
//   $('#slider_value').html( $(this).val() );
// });

$('.holtel_evaluate-box2-btn').click(function () {
  $('.holtel_evaluate-box2-khoi').toggleClass('holtel_evaluate-box2-khoi_active')
})
// onclick="location.href='/'"
$('.search_holtel-infor-map,.detail_infor-other-btn').click(function () {
  $('.popup_map').css('display', 'flex');
  event.preventDefault();
})

// ---------
$(window).click(function (e) {
  var a = $('.click_map_index ,.search_holtel-infor-map,.detail_infor-other-btn');
  var popup = $('.container_area_holtel');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_map').fadeOut(500)
  }
})

$('.container_area_close-map p').click(function () {
  $('.popup_map').fadeOut(500)
})
$('.click_refund').click(function () {
  $('.popup_policy_refund-overlay').toggle(500);
})
$(window).click(function (e) {
  var a = $('.click_refund');
  var popup = $('.popup_policy_refund');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_policy_refund-overlay').fadeOut(500)
  }
})
$('.popup_policy_refund img').click(function () {
  $('.popup_policy_refund-overlay').toggle(500);
})
$('.click_children').click(function () {
  $('.popup_policy_children-overlay').css('display', 'flex');
})
$(window).click(function (e) {
  var a = $('.click_children');
  var popup = $('.popup_policy_children');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_policy_children-overlay').fadeOut(500)
  }
})
$('.close_popup').click(function () {
  $('.overlay_dong').fadeOut(500);
})

$('.click_final').click(function () {
  $('.popup_price_final-overlay').css('display', 'flex');
})

$('.click_detail').click(function () {
  $('.popup_view_detail_room-overlay').css('display', 'flex');
})

$(window).click(function (e) {
  var a = $('.click_final');
  var popup = $('.popup_price_final');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_price_final-overlay').hide();
  }
})
$(window).click(function (e) {
  var a = $('.click_detail');
  var b = $('.detail_introduce_share');
  var d = $('.other_utilities');
  var f = $('.circle_plus_code_discount');
  var h = $('.bookroom_confirm_btn');
  var popup_convenient = $('.popup_convenient');
  var popup_share = $('.popup_share')
  var popup = $('.popup_view_detail_room');
  var popup_code_discount = $('.popup_code_discount');
  var maximum_capacity_people = $('.maximum_capacity_people');
  var infor_capacity_people = $('.infor_capacity_people');
  var popup__successful = $('.popup_request_room_successful');

  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_view_detail_room-overlay').fadeOut(500);
  }
  if (!b.is(e.target) && b.has(e.target).length == 0 && !popup_share.is(e.target) && popup_share.has(e.target).length == 0) {
    $('.popup_share_overlay').fadeOut(500);
  }
  if (!d.is(e.target) && d.has(e.target).length == 0 && !popup_convenient.is(e.target) && popup_convenient.has(e.target).length == 0) {
    $('.popup_convenient_overlay').fadeOut(500);
  }
  if (!f.is(e.target) && f.has(e.target).length == 0 && !popup_code_discount.is(e.target) && popup_code_discount.has(e.target).length == 0) {
    $('.popup_code_discount_overlay').fadeOut(500);
  }
  if (!infor_capacity_people.is(e.target) && infor_capacity_people.has(e.target).length == 0 && !maximum_capacity_people.is(e.target) && maximum_capacity_people.has(e.target).length == 0) {
    $(maximum_capacity_people).fadeOut(100);
  }
  if (!h.is(e.target) && h.has(e.target).length == 0 && !popup__successful.is(e.target) && popup__successful.has(e.target).length == 0) {
    $('.popup_request_room_successful-overlay').fadeOut(100);
  }
})

// -----------
$('.detail_introduce_share').click(function () {
  $('.popup_share_overlay').css('display', 'flex')
})

$('.other_utilities').click(function () {
  $('.popup_convenient_overlay').css('display', 'flex')
})

$('input[name=check_client]').click(function () {
  var value = $('input[name=check_client]:checked').val();
  // console.log(value)
  if (value == 2) {
    $('.bookroom_contact_receiver').show();
  } else if (value == 1) {
    $('.bookroom_contact_receiver').hide();
  }
});

// thiết lập phòng
$('.circle_plus_code_discount').click(function () {
  $('.popup_code_discount_overlay').css('display', 'flex')
})
$('.bookroom-right_discount_click').click(function () {
  $(this).toggleClass('rotation')
  $('.bookroom-right__infor').toggle(200);
})
$('.bookroom_request_btn').click(function () {
  $(this).hide()
  $('.bookroom_request_especially').fadeIn(500)
})
$('.infor_capacity_people').click(function () {
  $(this).parents().children('.maximum_capacity_people').show()
})
// -------successful resquest
$('.bookroom_confirm_btn').click(function () {
  $('.popup_request_room_successful-overlay').css('display', 'flex');
})
$('.close_popup_successful').click(function () {
  $('.popup_request_room_successful-overlay').hide();
})
// ----------show pass
$('.login_right_pass_img').click(function () {
  $(this).children().toggleClass('eye_show');
  $(this).children().toggleClass('hidden')
  let input = $(this).prev();
  input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
});
// ----------otp input 
$('.digit-group').find('input').each(function () {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function (e) {
    var parent = $($(this).parent());

    if (e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));

      if (prev.length) {
        $(prev).select();
      }
    } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));

      if (next.length) {
        $(next).select();
      } else {
        if (parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});
// --
$('.general_contact_btn-email').click(function () {
  $('.popup_insert_email_overlay').css('display', 'flex');
})
$('.popup_insert_email_accuracy').click(function () {
  $('.popup_accuracy_email-overlay').css('display', 'flex')
})

$('.popup_accuracy_email-btn').click(function () {
  $('.popup_accuracy_email-overlay').hide()
})
$('.email_confirm_insert ,.popup_insert_email_cancel').click(function () {
  $('.popup_insert_email_overlay').fadeOut(500);
})
$(window).click(function (e) {
  var a = $('.general_contact_btn-email ');
  var b = $('.create__content_infor_goggle_map');
  var popup3 = $('.popup_map__location')
  var popup = $('.popup_insert_email');
  var popup2 = $('.popup_accuracy_email-overlay')
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0 && !popup2.is(e.target) && popup2.has(e.target).length == 0) {
    $('.popup_insert_email_overlay').fadeOut(500);
  }
  if (!b.is(e.target) && b.has(e.target).length == 0 && !popup3.is(e.target) && popup3.has(e.target).length == 0) {
    $('.popup_map__location-overlay').fadeOut(500);
  }
})
// ------------ map
$('.create__content_infor_goggle_map').click(function () {
  $('.popup_map__location-overlay').css('display', 'flex')
})



// ---------checked

$("input[name='bathroom_click_tong']").click(function () {
  if ($(this).is(':checked')) {
    $("input[name='bathroom_click']").prop('checked', true);
  } else {
    $("input[name='bathroom_click']").prop('checked', false);
  }
});
$("input[name='bathroom_click']").click(function () {

  var i = 0;
  $("input[name='bathroom_click']").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 10) {
    $("input[name='bathroom_click_tong']").prop('checked', true);
  } else {
    $("input[name='bathroom_click_tong']").prop('checked', false);
  }
})
// -----------
$(".convenient_minibar_total").click(function () {
  if ($(this).is(':checked')) {
    $(".convenient_minibar_click").prop('checked', true);
  } else {
    $(".convenient_minibar_click").prop('checked', false);
  }
});
$(".convenient_minibar_click").click(function () {
  var i = 0;
  $(".convenient_minibar_click").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 7) {
    $(".convenient_minibar_total").prop('checked', true);
  } else {
    $(".convenient_minibar_total").prop('checked', false);
  }
})
// --------------
$(".bed_romm_total").click(function () {
  if ($(this).is(':checked')) {
    $(".bed_romm_click").prop('checked', true);
  } else {
    $(".bed_romm_click").prop('checked', false);
  }
});
$(".bed_romm_click").click(function () {
  var i = 0;
  $(".bed_romm_click").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 22) {
    $(".bed_romm_total").prop('checked', true);
  } else {
    $(".bed_romm_total").prop('checked', false);
  }
})
// --------------
$(".business_total").click(function () {
  if ($(this).is(':checked')) {
    $(".business_click").prop('checked', true);
  } else {
    $(".business_click").prop('checked', false);
  }
});
$(".business_click").click(function () {
  var i = 0;
  $(".business_click").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 4) {
    $(".business_total").prop('checked', true);
  } else {
    $(".business_total").prop('checked', false);
  }
})
// --------------
$(".dining_room_total").click(function () {
  if ($(this).is(':checked')) {
    $(".dining_room_click").prop('checked', true);
  } else {
    $(".dining_room_click").prop('checked', false);
  }
});
$(".dining_room_click").click(function () {
  var i = 0;
  $(".dining_room_click").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 4) {
    $(".dining_room_total").prop('checked', true);
  } else {
    $(".dining_room_total").prop('checked', false);
  }
})
// --------------
$(".other_amenities_total").click(function () {
  if ($(this).is(':checked')) {
    $(".other_amenities_click").prop('checked', true);
  } else {
    $(".other_amenities_click").prop('checked', false);
  }
});
$(".other_amenities_click").click(function () {
  var i = 0;
  $(".other_amenities_click").each(function () {
    if ($(this).is(':checked')) {
      i++;
    }
  })
  if (i === 11) {
    $(".other_amenities_total").prop('checked', true);
  } else {
    $(".other_amenities_total").prop('checked', false);
  }
})

// ------------
$('.room_setting_capacity_checkbox-element').click(function () {
  $('.popup_convenient_room_setting-overlay').css('display', 'flex')
})
$(window).click(function (e) {
  var a = $('.room_setting_capacity_checkbox-element');
  var popup = $('.popup_convenient_room_setting');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_convenient_room_setting-overlay').fadeOut(500);
  }
})

var html = '<div class="room_setting_bed__type-insert d_flex">'
html += '<div class="bed__type-insert-item">'
html += '<p class="font_w400 font_s16 line_h20 color_gray9">Kiểu giường <span class="color_reb">*</span></p>'
html += '<div class="khung_select">'
html += '<select name="" id="" class="size-14 select_option">'
html += '<option selected disabled value="" class="">Chọn</option>'
html += '<option value="">HTSKDDL</option>'
html += '</select>'
html += '</div>'
html += '</div>'
html += '<div class="bed__type-insert-item ">'
html += '<p class="font_w400 font_s16 line_h20 color_gray9">Số lượng <span class="color_reb">*</span></p>'
html += '<div class="bed__type-insert-item-delte d_flex align_c">'
html += '<div class="khung_input">'
html += '<input type="text" placeholder="Nhập">'
html += '</div>'
html += '<img src="/images/icon/trash_delete.svg" alt="" onclick="delete_parent_div(this)">'
html += '</div>'
html += '</div>'
html += '</div>'

$('.room_setting_bed-btn').click(function () {
  $(this).parents('.room_setting_bed__type').children('.parent_div').append(html)
  // $('.parent_div').append(html)
  $(".select_option").select2({
    width: "100%",
  });
})
function delete_parent_div(a) {
  $(a).parents('.room_setting_bed__type-insert').remove();
}
// ----------
$('.general_btn-save_box3').click(function () {
  $('.create_holtel_room_setting_banner').css('display', 'flex');
  $('.create_holtel_room_setting').hide();
  $('.setting_print_chung').show()
  $('.create_holtel_room_setting_show-next').show();
  $('.edit_holtel_room_setting_show-next').show();
  $("html, body").animate({ scrollTop: 0 }, 1000);
})
$('.room_setting_banner_box').click(function () {
  $(this).parents('.edit_holtel_room_setting_show-next').hide();
  $('.create_holtel_room_setting').show();
  $('.create_holtel_room_setting_show-next').hide();

})

$('.btn-save_box6').click(function () {
  $('.create_holtel_infor__pay').show();
  $('.sidebar_item_sau').addClass('tich_xanh');
  $('.sidebar_item_sau').removeClass('active_circle');
})
// chuyen trang
function btn_seve_create(a, b, c, d) {
  $(a).toggle();
  $(b).toggle();
  $(c).addClass('tich_xanh');
  $(c).removeClass('active_circle');
  $(d).addClass('active_circle');
  // location.href = '#create_holtel_title';
  $("html, body").animate({ scrollTop: 0 }, 1000);
}
function btn_sidebar_create(b, a, d, c) {
  $(b).hide();
  $(a).show();
  $(d).removeClass('active_circle')
  // $(c).addClass('tich_xanh')
  $(c).addClass('active_circle')
  // ('.create_holtel_room_setting').hide();
}

// ----------------------------
// thu vieenj anh
$('.photo_library_khoi3-show').click(function () {
  $(this).toggleClass('rotation')
  $(this).parents('.photo_library_khoi3').children('.room_setting__img-upload').toggle(300);
})



// ------
$(document).ready(function () {
  $('.additional_price').change(function () {
    var additional_price = $(this).val();
    if (additional_price == 1) {
      $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
      $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__fee').show()
    } else if (additional_price == 2) {
      $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
      $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__free_limit').show();
    } else {
      $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
    }
  })
})
// -----------check khoi 3 chinhs sach tao khach san
$(document).ready(function () {
  $("input[name='refund_radio']:radio").change(function () {
    if ($(this).val() == '2') {
      $('.policy_khoi3__checkbox_hidden').show();
    }
    else {
      $('.policy_khoi3__checkbox_hidden').hide();
    }

  });
});

// 

var html1 = ' <div class="policy_khoi3_hidden-absent-box">'
html1 += '<div class="policy_khoi3_hidden-absent-item d_flex">'
html1 += '<div class="policy_khoi3_hidden_input-left d_flex align_c">'
html1 += '   <p class="font_w400 font_s16 line_h24 color_000 mr_8">Từ</p>'
html1 += '   <div class="policy_khoi3_hidden_input-element d_flex align_c">'
html1 += '       <div class="khung_input">'
html1 += '            <input type="text" placeholder="0">'
html1 += '          </div>'
html1 += '          <div class="khung_select">'
html1 += '               <select name="" id="" class="size-14 select_option">'
html1 += '                   <option selected disabled value="0" class="">Giờ</option>'
html1 += '                   <option value="">abc</option>'
html1 += '                </select>'
html1 += '               </div>'
html1 += '          </div>'
html1 += '         <p class="font_w400 font_s16 line_h24 color_000 mr_8">Đến</p>'
html1 += '         <div class="policy_khoi3_hidden_input-element d_flex align_c">'
html1 += '              <div class="khung_input">'
html1 += '              <input type="text" placeholder="0">'
html1 += '               </div>'
html1 += '              <div class="khung_select">'
html1 += '                <select name="" id="" class="size-14 select_option">'
html1 += '                     <option selected disabled value="0" class="">Giờ</option>'
html1 += '                     <option value="">abc</option>'
html1 += '                   </select>'
html1 += '             </div>'
html1 += '          </div>'
html1 += '      </div>'
html1 += '      <div class="policy_khoi3_hidden_input_right d_flex">'
html1 += '           <div class="khung_select">'
html1 += '              <select name="" id="" class="size-14 select_option">'
html1 += '               <option selected value="0" class="">Miễn phí</option>'
html1 += '                 <option value="">Số đêm đầu</option>'
html1 += '                 <option value="">% giá trị đơn phòng</option>'
html1 += '                   <option value="">% Đêm đầu tiên</option>'
html1 += '              </select>'
html1 += '           </div>'
html1 += '        </div>'
html1 += '        <div class="policy_khoi3_hidden_input_right">'
html1 += '           <div class="khung_input">'
html1 += '               <input type="text" placeholder="Nhập">'
html1 += '          </div>'
html1 += '     </div>'
html1 += '     <div class="policy_khoi3_hidden_input_right-img d_flex align_c">'
html1 += '       <img src="/images/icon/trash_delete.svg" alt="" onclick="delete_policy_khoi3(this)">'
html1 += '   </div>'
html1 += ' </div>'
html1 += '  <p class="font_w400 font_s16 line_h20 color_gray6 mt_16">Hủy Trước check in từ 48 giờ đến 60 giờ: Thu phí (10 % giá trị đơn phòng)</p>'
html1 += '  </div>'

$('.policy_khoi3-btn').click(function () {
  // $(this).parents('.room_setting_bed__type').children('.parent_div').append(html1)
  $('.policy_khoi3_hidden-absent').append(html1)
  $(".select_option").select2({
    width: "100%",
  });
})

function delete_policy_khoi3(a) {
  $(a).parents('.policy_khoi3_hidden-absent-box').remove();
}

// -----------------------
var html3 = '<div class="policy_khoi2_age_from d_flex align_c">'
html3 += '   <div class="policy_khoi2_age_from-item mr_16">'
html3 += '   <p class="font_w400 font_s16 line_h20 color_gray9">Tuổi từ <span class="color_reb">*</span></p>'
html3 += '   <div class="khung_select">'
html3 += '   <select name="" id="" class="size-14 select_option">'
html3 += '     <option selected disabled value="" class="">0</option>'
html3 += '     <option value="">HTSKDDL</option>'
html3 += '   </select>'
html3 += '  </div>'
html3 += ' </div>'
html3 += ' <div class="policy_khoi2_age_from-item mr_16">'
html3 += '   <p class="font_w400 font_s16 line_h20 color_gray9">Đến <span class="color_reb">*</span></p>'
html3 += '  <div class="khung_select">'
html3 += '    <select name="" id="" class="size-14 select_option">'
html3 += '      <option selected disabled value="" class="">0</option>'
html3 += '       <option value="">HTSKDDL</option>'
html3 += '     </select>'
html3 += '   </div>'
html3 += ' </div>'
html3 += '<div class="policy_khoi2_age_from-item_free">'
html3 += '   <p class="font_w400 font_s16 line_h20 color_gray9"></p>'
html3 += '   <div class="khung_select">'
html3 += '    <select name="" id="" class="size-14 select_option additional_price">'
html3 += '      <option selected value="0" class="">Miễn phí</option>'
html3 += '       <option value="1">Mất phí</option>'
html3 += '      <option value="2">Giới hạn miễn phí</option>'
html3 += '    </select>'
html3 += '   </div>'
html3 += ' </div>'
html3 += ' <div class="policy_khoi2_age_from__fee ml_16 policy_khoi2_age_from__chung">'
html3 += '  <p class="font_w400 font_s16 line_h20 color_gray9">Phí (VNĐ/trẻ/đêm)<span class="color_reb">*</span></p>'
html3 += '  <div class="khung_input">'
html3 += '    <input type="text" placeholder="0">'
html3 += '  </div>'
html3 += ' </div>'
html3 += ' <div class="policy_khoi2_age_from__free_limit from__free_limit_children  policy_khoi2_age_from__chung mr_16">'
html3 += '   <p class="font_w400 font_s16 line_h20 color_gray9">Cho (Trẻ)<span class="color_reb">*</span></p>'
html3 += '  <div class="khung_input">'
html3 += '    <input type="text" placeholder="0">'
html3 += '  </div>'
html3 += ' </div>'
html3 += ' <div class="policy_khoi2_age_from__free_limit policy_khoi2_age_from__chung">'
html3 += '   <p class="font_w400 font_s16 line_h20 color_gray9">Giá khi hết miễn phí (VNĐ/trẻ/đêm)<span class="color_reb">*</span></p>'
html3 += '  <div class="khung_input">'
html3 += '     <input type="text" placeholder="0">'
html3 += '  </div>'
html3 += ' </div>'
html3 += '<div class="policy_khoi2_age_from-img d_flex align_c">'
html3 += '<img src="/images/icon/trash_delete.svg" alt="" onclick="delete_policy_khoi2_age_from(this)">'
html3 += '</div>'
html3 += '</div>'

$('.policy_khoi2-btn-click').click(function () {
  // $(this).parents('.room_setting_bed__type').children('.parent_div').append(html1)
  $('.policy_khoi2_age_from-total').append(html3)
  $(".select_option").select2({
    width: "100%",
  });
  $(document).ready(function () {
    $('.additional_price').change(function () {
      var additional_price = $(this).val();
      if (additional_price == 1) {
        $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
        $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__fee').show()
      } else if (additional_price == 2) {
        $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
        $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__free_limit').show();
      } else {
        $(this).parents('.policy_khoi2_age_from').children('.policy_khoi2_age_from__chung').hide()
      }
    })
  })
})
function delete_policy_khoi2_age_from(a) {
  $(a).parents('.policy_khoi2_age_from').remove();
}

// ------------

$('#checkbox_calendar').click(function () {
  if ($(this).is(':checked')) {
    $(this).toggleClass('back_green');
    $(this).toggleClass('back_gray2');
    $('.calendar_choose-basic-price-hidden').show()
  } else {
    $(this).toggleClass('back_green');
    $(this).toggleClass('back_gray2');
    $('.calendar_choose-basic-price-hidden').hide()
  }
})
$('#checkbox_calendar2').click(function () {
  if ($(this).is(':checked')) {
    $(this).toggleClass('back_green');
    $(this).toggleClass('back_gray2');
  } else {
    $(this).toggleClass('back_green');
    $(this).toggleClass('back_gray2');
  }
})
$('.opening_choose-date-navigation p').click(function () {
  $('.opening_choose-date-navigation p').removeClass('active_opening_choose')
  $(this).addClass('active_opening_choose')
})
$('.navigation_advanced').click(function () {
  $('.calendar_choose_advanced').show();
  $('.calendar_choose-basic').hide()
})
$('.navigation_basic').click(function () {
  $('.calendar_choose_advanced').hide();
  $('.calendar_choose-basic').show()
})
// -----------------
$('.manage_holtel_khoi-item-title-img').click(function () {
  $(this).parents('.manage_holtel_khoi-item').find('.manage_holtel_khoi-item-title-popup').toggle(100);
})
$(window).click(function (e) {
  var a = $('.manage_holtel_khoi-item-title-img');
  var popup = $('.manage_holtel_khoi-title-popup-hidden');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.manage_holtel_khoi-item-title-popup').hide(100);
  }
})

$('.stop_working p').click(function () {
  $(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').toggleClass('color_yellow2');
  $(this).html() == "Ngừng sử dụng" ? $(this).html('Hoạt động') : $(this).html('Ngừng sử dụng');
  $(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').html($(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').html() == 'Đang hoạt động' ? 'Ngưng hoạt động' : 'Đang hoạt động');
})
// if(  $(this).html() == "Ngừng sử dụng"){
//   $(this).html('Hoạt động')
//   $(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').html('Ngừng sử dụng');
// }else{
//   $(this).html('Ngừng sử dụng')
//   $(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').html('Đang hoạt động');
//   $(this).parents('.manage_holtel_khoi-item').find('.activate_stop_working').addClass('color_green');
// }
// -------------

$('.advanced__date-btn').click(function () {
  $('.optional_promotion-date-hidden').show();
  $(this).toggle();
})
$('.hide_advanced__date-btn').click(function () {
  $('.optional_promotion-date-hidden').hide()
  $('.advanced__date-btn').toggle(100);
})

$('input[name = radio_vnd_click]').click(function () {
  var value = $('input[name = radio_vnd_click]:checked').val();
  // console.log(value)
  if (value == 2) {
    $('.discount-input_vnd').html('VNĐ')
  } else if (value == 1) {
    $('.discount-input_vnd').html('%')
  }
})


$('input[name = discount_radio_check]').click(function () {
  var value = $('input[name = discount_radio_check]:checked').val();
  if (value == 2) {
    $('.type-discount_chung').hide()
    $('.specific_night_hidden_total').show()
  } else if (value == 3) {
    $('.type-discount_chung').hide()
    $('.exact_day_hidden_total').show()
  } else {
    $('.type-discount_chung').hide()
  }
})
$('input[name = radio_application_click]').click(function () {
  var value = $('input[name = radio_application_click]:checked').val();
  if (value == 1) {
    $('.promotion_application__hidden').hide()
  } else if (value == 2 || value == 3) {
    $('.promotion_application__hidden').show()
  }
})
$('.optional_promotion-type-btn').click(function () {
  $(this).hide();
  $('.promotion-type-discount_hidden').show();
})
$('.hide_discount_hidden-btn').click(function () {
  $('.promotion-type-discount_hidden').hide();
  $('.optional_promotion-type-btn').show();
})

$('.promotion-date-hidden-option-rank-item').click(function () {
  $(this).toggleClass('active_option-rank');
})

// ---------------------------

var html4 = ' <div class="stay_establish-table-tbody-row d_flex align_c">'
html4 += '  <div class="stay_establish-table-tbody-td d_flex align_c space_b">'
html4 += '       <div class="stay_establish-table-item d_flex align_c">'
html4 += '  <div div class="khung_input" >'
html4 += '        <input type="text" placeholder="3">'
html4 += '  </div>'
html4 += ' <p class="font_w400 font_s16 line_h20 color_gray9 ml_8">Đêm</p>'
html4 += '     </div>'
html4 += '      <div class="stay_establish-table-item d_flex align_c">'
html4 += '         <div class="khung_input">'
html4 += '            <input type="text" placeholder="3">'
html4 += '          </div>'
html4 += '          <p class="font_w400 font_s16 line_h20 color_gray8 ml_8">%</p>'
html4 += '      </div>'
html4 += '  </div>'
html4 += '  <div class="stay_establish-table-tbody-td-input">'
html4 += '      <div class="khung_input">'
html4 += '          <input type="text" placeholder="Lưu trú dài hạn tháng 07/2022">'
html4 += '      </div>'
html4 += '   </div>'
html4 += '  <div class="stay_establish-table-tbody-td_last d_flex align_c space_b">'
html4 += '      <label class="checkbox-label-phanquyen">'
html4 += '          <input type="checkbox">'
html4 += '         <span class="checkbox-custom"></span>'
html4 += '     </label>'
html4 += '      <img src="/images/icon/trash_delete.svg" alt="" onclick = "delete_stay_establish_row(this)" >'
html4 += '  </div>'
html4 += ' </div>'

$('.long_term__stay_establish-btn').click(function () {
  $('.stay_establish-table-tbody').append(html4)
})
function delete_stay_establish_row(a) {
  $(a).parents('.stay_establish-table-tbody-row').remove();
}
// ----------- ghim tin

$('.mechanism_click ,.interest_click').click(function () {
  $('.mechanism_work_overlay').css('display', 'flex');
})

$('.endow_click').click(function () {
  $('.endow_overlay').css('display', 'flex');
})

$(window).click(function (e) {
  var a = $('.mechanism_click');
  var c = $('.endow_click');
  var popup = $('.mechanism_work');
  var popup1 = $('.endow_contaner');

  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.mechanism_work_overlay').hide(100);
  }

  if (!c.is(e.target) && c.has(e.target).length == 0 && !popup1.is(e.target) && popup1.has(e.target).length == 0) {
    $('.endow_overlay').hide(100);
  }
})
// quản lý đơn hàng 
$('.ql_order_menu-item').click(function () {
  $('.ql_order_menu-item').removeClass('active_item');
  $(this).addClass('active_item');
})
$('.ql_order_status-item').click(function () {
  $('.ql_order_status-item').removeClass('ql_order_status_active');
  $(this).addClass('ql_order_status_active');
})
$('.ql_order-table_tbody-rows').click(function () {
  var display = $(this).next('.ql_order-table_tbody-rows_hidden').css('display');
  if (display == 'table-row') {
    $(this).next('.ql_order-table_tbody-rows_hidden').hide();
    $('.ql_order-table_tbody-rows').removeClass('active_back_tr');
    $('.ql_order-table_tbody-rows').find('img').removeClass('rotation_90');
  }
  else {
    $('.ql_order-table_tbody-rows_hidden').each(function () {
      $('.ql_order-table_tbody-rows_hidden').hide();
      $('.ql_order-table_tbody-rows').removeClass('active_back_tr');
      $('.ql_order-table_tbody-rows').find('img').removeClass('rotation_90');
    });
    $(this).next().toggle(300);
    $(this).toggleClass('active_back_tr');
    $(this).find('img').toggleClass('rotation_90')
  }
})
// -----------quản lý giao dịch 
$('.ql_transaction_menu-li').click(function () {
  $('.ql_transaction_menu-li').each(function () {
    $('.ql_transaction_menu-li').removeClass('active_transaction_menu')
  })
  $(this).addClass('active_transaction_menu')
})

$('.recharge_monny').click(function () {
  $('.popup_recharge_suc_overlay').css('display', 'flex')
})

$('.withdraw_monny').click(function () {
  $('.popup_money_suc_overlay').css('display', 'flex')
})

$(window).click(function (e) {
  var a = $('.recharge_monny');
  var b = $('.withdraw_monny');
  var popup = $('.popup_recharge_suc');
  var popup1 = $('.popup_money_suc');

  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_recharge_suc_overlay').hide(100);
  }

  if (!b.is(e.target) && b.has(e.target).length == 0 && !popup1.is(e.target) && popup1.has(e.target).length == 0) {
    $('.popup_money_suc_overlay').hide(100);
  }
})
// -----
$('.click_map_index').click(function () {
  $('.popup_map').show();
})

$('.convenient_12').click(function () {
  $('.popup_room_amenities_overlay').css('display', 'flex');
})
$(window).click(function (e) {
  var a = $('.convenient_12');
  var b = $('.holtel_evaluate-box2-menu-red');
  var popup = $('.popup_room_amenities');
  var popup1 = $('.popup_evaluate');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_room_amenities_overlay').hide(100);
  }
  if (!b.is(e.target) && b.has(e.target).length == 0 && !popup1.is(e.target) && popup1.has(e.target).length == 0) {
    $('.popup_evaluate_overlay').hide(100);
  }
})

$('.holtel_evaluate-box2-menu-red').click(function () {
  $('.popup_evaluate_overlay').css('display', 'flex')
})
// -------- nhan xet danh gia 
$('.click_cmt').click(function () {
  $(this).parents().children('.evaluate-box2_cmt-hidden').show()
})
$('.evaluate-box2_cmt-an').click(function () {
  $(this).parents().children('.evaluate-box2_cmt-hidden').hide()
})
// ---------
var html5 = '<div class="popup_see_more-menu d_flex align_c">'
html5 += ' <div class="popup_see_more-menu-item active_item ">'
html5 += '  < p class="font_w600 font_s20 line_h32 color_gray8" > Sảnh lễ tân</ >'
html5 += '</div >'
html5 += '<div class="popup_see_more-menu-item">'
html5 += '   <p class="font_w600 font_s20 line_h32 color_gray8">Sảnh lễ tân</p>'
html5 += '</div>'
html5 += '<div class="popup_see_more-menu-item">'
html5 += '   <p class="font_w600 font_s20 line_h32 color_gray8">Sảnh lễ tân</p>'
html5 += '</div>'
html5 += '</div >'

//  thiết lập phòng
$('.sidebar_item_ba').click(function () {
  $('.create_holtel_room_setting_banner').css('display', 'flex');
  $('.create_homestay_room_apartment').hide();
  $('.create_holtel_room_setting').hide();
  $('.create_holtel_room_setting_show-next').show();
})


$('.setting_homestay_chung').click(function () {
  $('.create_holtel_room_setting_show-next').hide();
})

$('.setting_homestay_chung').click(function () {
  $('.create_homestay_room_apartment').show();
})
$('.general_btn-save_box3_2').click(function () {
  $('.create_holtel_room_setting_show-next').show();
  $(this).parents('.create_homestay_room_apartment').hide()
})


$('.holtel_infor-new-avt').click(function () {
  event.preventDefault();
})
// -------responsive
$('.search_filter_600').click(function () {
  $('.search_holtel-dishes-left').toggle();
})

$('.btn_watch_flight').click(function () {
  var x = $('.btn_watch_flight p');
  $(x).html() == 'Xem thêm' ? $(x).html('Thu gọn') && $('.search_price_flight-box').css('height', 'unset') : $(x).html('Xem thêm') && $('.search_price_flight-box').css('height', '405px');
  $(this).click(function () {
    $("html, body").animate({
      scrollTop: $('#search_price_flight').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
    }, 'slow');
  })
})

// suaw  thong tin khach san
$('.data_holtel').click(function (e) {
  $('.data_hotel_sidebar').show();
  $(window).click(function (e) {
    var a = $('.data_holtel');
    var popup = $('.data_hotel_sidebar');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
      popup.hide();
    }
  })
})
$('.promotion').click(function (e) {
  $('.ql_promotion_sidebar').show();
  $(window).click(function (e) {
    var a = $('.promotion');
    var popup = $('.ql_promotion_sidebar');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
      popup.hide();
    }
  })
})

// upload img 

$(document).ready(function () {
  if (window.File && window.FileList && window.FileReader) {
    $(".files").change(function (e) {
      var a = $(this);
      a.parents('.upload-function-insert-img').each(function () {
        $(this).parents('.room_setting__img-upload-khoi-function').children('.pip').remove();
      });
      var files = e.target.files,
        filesLength = files.length;
      if (filesLength < 10) {
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]

          var fileReader = new FileReader();
          fileReader.onload = (function (e) {
            var file = e.target;
            var html =
              `<div class="pip"><img class="imageThumb" src="${e.target.result}" title="${file.name}"/>
                    <div class = "function_img">             
                          <div class="xoay_img">
                          <img src="/images/icon/refresh_ros.svg" alt="">
                          </div>
                          <div class="remove">
                          <img src="/images/icon/trash_delete.svg" alt="">
                        </div>
                    </div>
                  </div>`

            a.parents('.upload-function-insert-img').before(html);
            $(".remove").click(function () {
              $(this).parents(".pip").remove();
            });

            // --xoay
            var degreen = 0;

            function rotate(degree, a) {
              // For webkit browsers: e.g. Chrome
              a.css({
                WebkitTransform: 'rotate(' + degree + 'deg)'
              });
              // For Mozilla browser: e.g. Firefox
              a.css({
                '-moz-transform': 'rotate(' + degree + 'deg)'
              });

              // Animate rotation with a recursive call
              setTimeout(function () {
                rotate(++degree);
              }, 65);
            }
            $('.xoay_img').click(function () {
              degreen += 90;
              var a = $(this).parents(".pip").find(".imageThumb");
              rotate(degreen, a);
            });

          });
          fileReader.readAsDataURL(f);
        }
      } else {
        alert("Bạn chỉ có thể tải tối đa 10 file ảnh");
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

// main css
$('.slick_li').click(function(){
  let data = $(this).data("slide")
  if(data ==1){
    $('.search_view_hotel').css('display','flex');
    $('.search_view_homestay').hide();
  }else if(data ==2){
    $('.search_view_homestay').css('display','flex');
    $('.search_view_hotel').hide();
  }
})

function slickSlider(a, b, c, d, e, f) {
  $(a).removeClass('active_item');
  $(b).addClass('active_item');
  $(c).hide();
  $(d).show();
  $(e).addClass('hidden');
  $(f).removeClass('hidden');

  let data = b.dataset.slide;
  if (data == 1) {
    if ($('.sliderHomeStay').hasClass('slick-initialized')) {
      $('.sliderHomeStay').slick('unslick');
    }

    $('.sliderHotel').slick({
      dots: true,
      centerMode: false,
      centerPadding: '0px',
      slidesToShow: 3,
      prevArrow: '<button class="slick-prev prev-arrow"><img src="assets/images/icon/slickPrev.svg" alt="" /></button>',
      nextArrow: '<button class="slick-next next-arrow"><img src="assets/images/icon/slickNext.svg" alt="" /></button>',

    });

    //  thay text 

    let slickTrack = document.querySelector('.sliderHotel .slick-track');

    if (slickTrack) {
      function reomverClass(listChildren, className) {
        if (listChildren) {
          listChildren.forEach((child) => {
            if (child.classList.contains(className)) {
              child.classList.remove(className)
            }
          })
        }
      }

      let childrenAdd = document.querySelectorAll('.slick_hotel_list > div')

      function addClassSlider(e) {
        reomverClass(childrenAdd, 'acitve_slder')
        let child = [...slickTrack.children];

        child.forEach((element) => {
          if (element.classList.contains('slick-current')) {
            let index = element.getAttribute('data-slick-index');

            if (childrenAdd[index]) {
              childrenAdd[index].classList.add('acitve_slder');
            }
          }
        })
      }

      slickTrack.addEventListener('transitionstart', addClassSlider)
    }
  } else {
    if ($('.sliderHotel').hasClass('slick-initialized')) {
      $('.sliderHotel').slick('unslick');
    }
    $('.sliderHomeStay').slick({
      dots: true,
      centerMode: false,
      centerPadding: '0px',
      slidesToShow: 3,
      prevArrow: '<button class="slick-prev prev-arrow"><img src="assets/images/icon/slickPrev.svg" alt="" /></button>',
      nextArrow: '<button class="slick-next next-arrow"><img src="assets/images/icon/slickNext.svg" alt="" /></button>',
      
    });

    // ---- thay text
    let slickTrack = document.querySelector('.sliderHomeStay .slick-track');

    if (slickTrack) {
      function reomverClass(listChildren, className) {
        if (listChildren) {
          listChildren.forEach((child) => {
            if (child.classList.contains(className)) {
              child.classList.remove(className)
            }
          })
        }
      }

      let childrenAdd = document.querySelectorAll('.slick_homestay_list > div')

      function addClassSlider(e) {
        reomverClass(childrenAdd, 'acitve_slder')
        let child = [...slickTrack.children];

        child.forEach((element) => {
          if (element.classList.contains('slick-current')) {
            let index = element.getAttribute('data-slick-index');

            if (childrenAdd[index]) {
              childrenAdd[index].classList.add('acitve_slder');
            }
          }
        })
      }

      slickTrack.addEventListener('transitionstart', addClassSlider)
    }

  }
}

function click_active(a, b) {
  $(a).removeClass('active_item');
  $(b).addClass('active_item');
}


// gửi lại mật khẩu
$('.hunghabay_login_request').click(function () {
  $('.request_hidden').show();
})

// xác nhận otp
function hunghabay_login(){
  $('.popup_otp_successful_overlay').css('display', 'flex')
}


$(window).click(function (e) {
  var a = $('.hunghabay_login_right_btn');
  var popup = $('.popup_otp_successful');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_otp_successful_overlay').hide(100);
  }
})


$('.password_confirm').click(function () {
  $('.popup_otp_successful_title p').html('Cập nhật mật khẩu thành công');
})

$('.click_business_hours').click(function () {
  $('.popup_business_hours').each(function () {
    $(this).hide();
  })
  $(this).parents('.search_holtel-infor-item').find('.popup_business_hours').toggle();
})

$(window).click(function (e) {
  var a = $('.click_business_hours');
  var b = $('.delete_click_product');
  var popup = $('.popup_business_hours');
  var popup2 = $('.delete_order');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.popup_business_hours').hide(100);
  }
  if (!b.is(e.target) && b.has(e.target).length == 0 && !popup2.is(e.target) && popup2.has(e.target).length == 0) {
    $('.delete_order_overlay').hide(100);
  }
})

$('.delete_click_product').click(function () {
  $('.delete_order_overlay').css('display', 'flex')
})
$('.huy_order_click').click(function () {
  $('.cancel_order_overlay').css('display', 'flex')
})

$(window).click(function (e) {
  var a = $('.huy_order_click');
  var popup = $('.cancel_order');
  if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
    $('.cancel_order_overlay').hide(100);
  }
})

function hoptac(a, b, c, d) {
  $('.cooperate_content_item').hide();
  var linkRoute = $(a).find('.linkRoute').attr('data-link');
  $("#getLinkRoute").attr('href', linkRoute);
  $('.text' + b).show()

  $(c).removeClass('actite_hoptac');
  $(d).addClass('actite_hoptac');
}

$('.compare_location_li').click(function () {
  $('.compare_location_li').removeClass('active_compare_li')
  $(this).addClass('active_compare_li');
})
$('.compare_search_red').click(function () {
  $(this).hide();
  $(this).parents('.compare_search_item').children('.compare_search_input').show();
})

$('.accommodation__near_btn').click(function () {
  $('.accommodation_search').toggle();
  if ($('.accommodation__near_btn p').html() == 'Ẩn') {
    $('.accommodation__near_map').addClass('recent_left');
    $('.accommodation_search').addClass('fadeInRight');
    $('.accommodation__near_btn p').html('Hiện');
    $('.accommodation__near_btn img').css('transform', 'rotate(180deg)')
  } else {
    $('.accommodation__near_btn p').html('Ẩn');
    $('.accommodation__near_map').removeClass('recent_left');
    $('.accommodation__near_btn img').css('transform', 'rotate(0deg)')
  }
})

$('input[name = price_homestay]').click(function () {
  var value = $('input[name = price_homestay]:checked').val();
  if (value == 1) {
    $('.price_select_homestay').hide();
  } else if (value == 2) {
    $('.price_select_homestay').show();
  }
})
$('.yes_love').click(function () {
  $('.yes_love_hidden').toggle();
})

// 
function btn_me_insert(a,b,c){
  $(a).parents().children(b).toggleClass('elipsis_unset')
  $(c).children('img').toggleClass('rotation');
  if ( $(c).children('p').html() == 'Xem thêm') {
    $(c).children('p').html('Rút gọn');
  }else{
    $(c).children('p').html('Xem thêm');
  }
}