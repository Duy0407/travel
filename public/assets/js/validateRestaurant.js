//======================================== CLICK NAVBAR CREATE RESTAURANT
var isInfoFilled = false;
var active_xoay = 'active_xoay text_blue';

var restaurantID = 0;

function clickNavbar(a, b, c, d) {
	// if (a === ".side_chung" && !isInfoFilled) {
	// 	alert('Vui lòng nhập thông tin chung');
	// 	return;
	// }
	$(a).hide();
	$(b).show();
	$(c).removeClass(active_xoay);
	$(d).addClass(active_xoay);
}

//---------- Lưu (thông tin chung)
function saveRestaurant(){
	var addRestaurant1 = $("#AddRestaurant1");
	addRestaurant1.validate({
		errorPlacement: function(error, element) {
	      	error.appendTo(element.parent(".parentInput"));
	      	error.wrap("<p class='check_email color_red font_s12'>");
	    },
	    rules: {
	      name: {required: true,},
	      service: {required: true,},
	      cuisine: {required: true,},
	      timeStart: {required: true,},
	      timeEnd: {required: true,},
	      city: {required: true,},
	      district: {required: true,},
	      address: {required: true,},
	      describe: {required: true,},
	    },

	    messages: {
	      name: {required: "Vui lòng nhập tên nhà hàng",},
	      service: {required: "Vui lòng chọn dịch vụ",},
	      cuisine: {required: "Vui lòng chọn ẩm thực",},
	      timeStart: {required: "Vui lòng chọn thời gian mở cửa",},
	      timeEnd: {required: "Vui lòng chọn thời gian đóng cửa",},
	      city: {required: "Vui lòng chọn thành phố",},
	      district: {required: "Vui lòng chọn quận huyện",},
	      address: {required: "Vui lòng nhập địa chỉ",},
	      describe: {required: "Giới thiệu nhà hàng không được để trống",},
	    },
	});

	if ($("input[name='typeRestaurant']").val() == "") {
		alert("Vui lòng chọn loại hình kinh doanh");
        return false;
	}

	var avatarRestaurant = $("input[name='restaurantAvatar']").prop('files')[0];
	if ($("input[name='restaurantAvatar']").val() == "") {
		alert("Vui lòng chọn ảnh đại diện");
        return false;
	}


	if (addRestaurant1.valid() === true) {
		var formData = new FormData(addRestaurant1[0]);
		var setIdRestaurantElement = $('.setIdRestaurant');
		$.ajax({
			url: "api/restaurant/save",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			dataType: 'json',
			success:function(result){
				isInfoFilled = true;
				setIdRestaurantElement.attr('data-id', result.id);
				$('.divCreate1').toggle();
				$('.divCreate2').toggle();
			}
		})
	}
}

//---------- Lưu (tiện nghi & chính sách)
function SaveAmenitiesPolicy(){
	var flag = true
	var arrayValues = [];
	var countValue = 0;
	// var idRestaurant = $('.setIdRestaurant').attr('data-id');
	var idRestaurant = 11;
	var policy = $("textarea[name='policy']").val();

	$("input[name='inputCheckBox']").each(function(){
		if ($(this).is(":checked")) {
			var value = $(this).val();
			arrayValues.push(value);
			countValue++;
		}
	});

	if (countValue == 0) {
		alert('Vui lòng chọn tiện nghi & dịch vụ');
		return flag = false;
	}

	if($("textarea[name='policy']").val() == ""){
		alert("Vui lòng nhập chính sách");
		return flag = false;
	}

	if (flag == true) {
		var formData = new FormData();
		formData.append("arrayValues", arrayValues);
		formData.append("idRestaurant", idRestaurant);
		formData.append("policy", policy);
		$.ajax({
			url: "api/Restaurant/SaveAmenitiesPolicy",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			dataType: 'json',
			success: function(result){
				console.log(result);
			}
		})
	}
}


//---------- Lưu (Thiết lập sản phẩm)
function SaveProductSetup(){
	$("#ProductSetup").validate({
		errorPlacement: function(error, element) {
			error.appendTo(element.parent(".parentInput"));
			error.wrap("<p class='check_email color_red font_s12'>");
		},
		rules: {
			categoryName: {required: true,},
			productName: {required: true,},
			productPrice: {required: true,},
			productDescribe: {required: true,},
		},
		messages: {
			categoryName: {required: "Vui lòng nhập tên danh mục",},
			productName: {required: "Vui lòng nhập tên sản phẩm",},
			productPrice: {required: "Vui lòng nhập giá sản phẩm",},
			productDescribe: {required: "Vui lòng nhập mô tả sản phẩm ",},
		},
	})

	if($("input[name='categoryFile']").val() === ""){
		alert('Vui lòng ảnh đại diện');
		return false;
	}

	if($("input[name='productAvatar']").val() === ""){
		alert('Vui lòng ảnh sản phẩm');
		return false;
	}

	if ($("#ProductSetup").valid()) {
		// var idRestaurant = $('.setIdRestaurant').attr('data-id');
		var idRestaurant = 11;
		var categoryAvatar = $("input[name='categoryFile']").prop('files')[0];
		var categoryName = $("input[name='categoryName']").val();
		var valueProduct = [];
		$('.getValueProduct').each(function(){
			var productAvatar = $(this).find("input[name='productAvatar']").prop('files')[0];
			var data = {
				avatar: productAvatar,
				name: $(this).find("input[name='productName']").val(),
				price: $(this).find("input[name='productPrice']").val(),
				describe: $(this).find("textarea[name='productDescribe']").val(),
			};
			valueProduct.push(data);
		});
		var formData = new FormData();
		formData.append("idRestaurant", idRestaurant);
		formData.append("categoryAvatar", categoryAvatar);
		formData.append("categoryName", categoryName);
		formData.append("valueProduct", valueProduct);

		$.ajax({
			url: "api/Restaurant/SaveProductSettings",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			dataType: 'json',
			success: function(result){
				console.log(result);
			}
		})
	}
}



//======================================== Đăng nhập nhà hàng
function login(){
	$("#RestaurantLogin").validate({
		errorPlacement: function(error, element) {
			error.appendTo(element.parent(".parentInput"));
			error.wrap("<p class='check_email color_red font_s12'>");
		},
		rules: {
			email: {required: true, CheckEmail: true,},
			password: {required: true,},
		},

		messages: {
			email: {required: "Vui lòng nhập email",},
			password: {required: "Vui lòng nhập mật khẩu",},
		},
	});

	if ($("#RestaurantLogin").valid() === true) {
		var email = $("input[name='email']").val();
		var password = $("input[name='password']").val();

		var formData = new FormData();
		formData.append('email', email);
		formData.append('password', password);

		$.ajax({
			url: "api/authentication",
      		type: "post",
      		data: formData,
			processData: false,
			contentType: false,
			dataType: 'json',
			success:function(result){
				var token = result.success;
				localStorage.setItem('token', token);
				if (token) {
					// getUserId();
					window.location.href = '/restaurant/manager';
				}
			},
			error: function(xhr, status, error){
				console.error(error);
			}
		})
	}
}

function getUserId(){
	var token = localStorage.getItem("token");
	$.ajax({
		url: "/api/GetUser",
		type: "GET",
		headers: {
			Authorization: "Bearer " + token,
		},
		dataType: 'json',
		success: function(response){
			var user_id = response.id;
      		console.log("User ID:", user_id);
		},
		error: function(xhr, status, error){
			console.error("Error while getting user ID:", error);
		}
	});
}

//======================================== Đăng ký nhà hàng
var RestaurantRegister = $("#RestaurantRegister");
RestaurantRegister.validate({
    errorPlacement: function(error, element) {
      error.appendTo(element.parent(".parentInput"));
      error.wrap("<p class='check_email color_red font_s12'>");
    },
    rules: {
      email: {required: true, CheckEmail: true,},
      password: {required: true, minlength: 6,},
      password_confirm: {required: true, equalTo: "#mk1",},
      fullName: {required: true, noSpecialChars: true},
      phone: {required: true, CheckPhone: true,},
    },

    messages: {
      email: {
        required: "Vui lòng nhập email",
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        minlength: "Mật khẩu tối thiểu 6 ký tự",
      },
      password_confirm: {
        required: "Vui lòng nhập lại mật khẩu",
        equalTo: "Mật khẩu nhập lại không chính xác",
      },
      fullName: {
        required: "Vui lòng nhập họ và tên",
      },
      phone: {
        required: "Vui lòng nhập số điện thoại liên hệ",
      },
    },
});






