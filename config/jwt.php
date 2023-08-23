<?php
	
	return [
		'secret' => env('JWT_SECRET'), //Sử dụng giá trị trong biến môi trường .env
		'ttl' => 60, // Thời gian sống của JWT token (tính bằng phút)
		'refresh_ttl' => 20160, // Thời gian sống của refresh token (tính bằng phút)
		'algo' => 'HS256', // Thuật toán mã hoá JWT
	];

?>