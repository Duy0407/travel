$('.holtel_destination').click(function () {
    $(this).parents().find('.popup_holtel_destination_show').toggle();
    $('.holtel_destination::after').show();
})
// ----Điểm đến
$(window).click(function (e) {
    var a = $('.holtel_destination');
    var popup = $('.popup_holtel_destination_show');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
        popup.hide();
    }
})

// -------Phòng

$('.popup_holtel_number_pepple').click(function () {
    $('.holtel_number_pepple_show').toggle();
})
$(window).click(function (e) {
    var a = $('.popup_holtel_number_pepple');
    var popup = $('.holtel_number_pepple_show');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
        popup.hide();
    }
})
// ---------slick

// ------------

function render_cong(a, b,c,d) {
    var tong = parseInt($(a).parents('.holtel_number_pepple-room-click').children('.room_number').text());
    var adults_tong = parseInt($('.adults_tong').children('.room_number').text());
    var room_tong = parseInt($('.room_tong').children('.room_number').text());

    console.log(adults_tong)
    console.log(room_tong)
    if (c == 1 || c == 2) {
        if (--adults_tong < room_tong && c== 1) {
            room_tong = ++room_tong;
            $('.adults_tong').children('.room_number').text(room_tong);
        }
        // alert(2)
        $('.' + b).text(room_tong);
        $('.' + d).text(room_tong);
      
        // console.log(adults_tong);
        // if(c == 2 && adults_tong == room_tong)
        // {
        //     alert(2)
        //     var a = $('.adults_tong').children('.room_number').text()
        //     $('.adults_tong').children('.room_number').text(a);
        //     $('.room_tong').children('.room_number').text(a);
        // }

    }
    $(a).parents('.holtel_number_pepple-room-click').children('.room_number').text(++tong);
    $('.' + b).text(tong);

}
// render_tru(this,'render_number_room')
function render_tru(a, b, c,d) {
    var tong = parseInt($(a).parents('.holtel_number_pepple-room-click').children('.room_number').text());
    var tong_childen = parseInt($(a).parents('.child_people').children('.room_number').text());
    var adults_tong = parseInt($('.adults_tong').children('.room_number').text());
    var room_tong = parseInt($('.room_tong').children('.room_number').text());

    tong = --tong;
    adults_tong = --adults_tong;
    // alert(adults_tong)
    $(a).parents('.child_people').children('.room_number').text(adults_tong);
    if (c == 1 || c == 2) {
        if (adults_tong < room_tong && c== 2 && adults_tong > 0) {
            $('.room_tong').children('.room_number').text(adults_tong);
            $('.' + b).text(adults_tong);
            $('.' + d).text(adults_tong);
        }
        // console.log(adults_tong);
        // if(c == 2 && adults_tong == room_tong)
        // {
        //     alert(2)
        //     var a = $('.adults_tong').children('.room_number').text()
        //     $('.adults_tong').children('.room_number').text(a);
        //     $('.room_tong').children('.room_number').text(a);
        // }

    }
    if (tong_childen > 0) {

        $(a).parents('.child_people').children('.room_number').text(--tong_childen);
        $('.' + b).text(tong_childen);
    }
    if (tong > 0) {
        $(a).parents('.holtel_number_pepple-room-click').children('.room_number').text(tong);
        $('.' + b).text(tong);
    }
}

// if ($('.cong_plus').click(function () {
//     var tong = parseInt($(this).parents('.holtel_number_pepple-room-click').children('.room_number').text());

// }));
// if ($('.tru_minus').click(function () {
//     var tong = parseInt($(this).parents('.holtel_number_pepple-room-click').children('.room_number').text());

//     if (tong >1) {
//         $(this).parents('.holtel_number_pepple-room-click').children('.room_number').text(--tong);
//     }
// }));

// if ($('.tru_minus').click(function () {
//     var tong = parseInt($(this).parents('.child_people').children('.room_number').text());
//     if (tong >0) {
//         $(this).parents('.child_people').children('.room_number').text(--tong);
//     }
// }));

$('.holtel_destination-input-change').keyup(function () {
    var input_vlue = $('.holtel_destination-input-change').val();

    if (input_vlue == '') {
        $('.popup_holtel_destination-suggest').show();
        $('.popup_holtel_destination-search').removeClass('w_100');
    } else {
        $('.popup_holtel_destination-suggest').hide();
        $('.popup_holtel_destination-search').addClass('w_100');
    }
})

// ----------active item holtel
$('.holtel_category-menu-li').click(function () {
    $('.holtel_category-menu-li').removeClass('active_item');
    $(this).addClass('active_item');
})
$('#khachsan_click').click( function() {
    var a = $(this).attr('data-id');
    $.ajax({
        
        type:"post",
        url: "../resources/views/render/render_dichvu.php",
        data:{
            type:a
        },
        success: function(data)
        {
           
            $('.holtel_category_khoi2').children().remove();
            $('.holtel_category_khoi2').html(data);
        }
    })
})
$('#nhahang_click').click( function() {
    var a = $(this).attr('data-id');
    $.ajax({
        type:"post",
        url: "../resources/views/render/render_dichvu.php",
        data:{
            type:a
        },
        success: function(data)
        {
            $('.holtel_category_khoi2').children().remove();
            $('.holtel_category_khoi2').html(data);
        }
    })
})
$('#flight_click').click(function(){
    var a = $(this).attr('data-id');
    $.ajax({
        
        type:"post",
        url: "/render/render_dichvu.php",
        data:{
            type:a
        },
        success: function(data)
        {
            
            $('.holtel_category_khoi2').children().remove();
            $('.holtel_category_khoi2').append(data);
        }
    })
})
$('#homestay_click').click(function(){
    var a = $(this).attr('data-id');
    $.ajax({
        
        type:"post",
        url: "/render/render_dichvu.php",
        data:{
            type:a
        },
        success: function(data)
        {
            
            $('.holtel_category_khoi2').children().remove();
            $('.holtel_category_khoi2').append(data);
        }
    })
})
// ---------- thả tim
$('.holtel_infor-new-avt-heart').click(function(){
    $(this).toggleClass('active_svg');
    event.preventDefault();
})
// -------
$('.container_area-box-li').click(function(){
    $('.container_area-box-li').removeClass('container_area-box-li_active');
    $(this).addClass('container_area-box-li_active');
    $('.container_area-box-attractions').toggle(500);
    $('.container_area-box-restaurant').toggle(500);
})

$('.header_khoi-close-show').click(function(){
    $('.header_khoi_ul').show();
})
$('#utilities_li').click(function(){
    $('.utilities_ul_c2').toggle();
})
$('.utilities_li').click(function(){
    $('.utilities_ul_c2').toggle();
})
// ----- click vào avt tài khoản
$('.btn_login_register').click(function(){
    $('.header_account').toggle();
})
$(window).click(function (e) {
    var a = $('.btn_login_register');
    var popup = $('.header_account');
    var b = $('.show_menu_sdn');
    var popup2 = $('.popup_nav_menu');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
        popup.hide();
    }
    if (!b.is(e.target) && b.has(e.target).length == 0 && !popup2.is(e.target) && popup2.has(e.target).length == 0) {
        popup2.hide();
    }
})

$('.back_top_icon').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
})
$('.show_menu_sdn').click(function(){
    $('.popup_nav_menu').show();
})

$('.bell_click').click(function(){
    $('.popup_bell').toggle(100);
})
$(window).click(function (e) {
    var a = $('.bell_click');
    var popup = $('.popup_bell');
    if (!a.is(e.target) && a.has(e.target).length == 0 && !popup.is(e.target) && popup.has(e.target).length == 0) {
        popup.hide();
    }
})

//  thiết lập phòng
$('.sidebar_item_ba').click(function () {
    $('.create_holtel_room_setting_banner').css('display', 'flex');
    $('.create_homestay_room_apartment').hide();
    $('.create_holtel_room_setting').hide();
    $('.create_holtel_room_setting_show-next').show();
});

$('.click_eyg').click(function () {
    $(this).children().toggleClass('show_eyg');
    $(this).children().toggleClass('hidden');
    let input = $(this).prev();
    input.attr('type', input.attr('type') == 'password' ? 'text' : 'password');
})
$('.click_eyg2').click(function () {
    $(this).children().toggleClass('show_eyg');
    $(this).children().toggleClass('hidden');
    let input = $(this).prev();
    input.attr('type', input.attr('type') == 'password' ? 'text' : 'password');
})
  

var inputConfirm = document.querySelectorAll('.confirmClass');
var button = document.querySelector('.figButton');

if (inputConfirm != null) {

    // inputConfirm.forEach(function(input){
    //     input.addEventListener('input', function(){
    //         input.value = input.value.replace(/[^0-9]/g, '');
    //     });
    // })


    inputConfirm.forEach(function(input){
        input.addEventListener('input', function() {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (inputConfirm[0].value.length == inputConfirm[0].maxLength &&
                inputConfirm[1].value.length == inputConfirm[1].maxLength &&
                inputConfirm[2].value.length == inputConfirm[2].maxLength &&
                inputConfirm[3].value.length == inputConfirm[3].maxLength &&
                inputConfirm[4].value.length == inputConfirm[4].maxLength &&
                inputConfirm[5].value.length == inputConfirm[5].maxLength) {
                button.removeAttribute('disabled');
                button.classList.remove('bgCCC');
            } else {
                button.setAttribute('disabled', true);
                button.classList.add('bgCCC');
            }
        })
    });


}