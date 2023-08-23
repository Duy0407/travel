<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <base href="{{ asset("") }}">

    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/restaurant.css">



</head>
<body>

    <div id="app">
        

        @include('HopTac.master.header')
        <!-- Content -->
            @yield('content')
        <!-- End Content -->

    </div>

<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/select2.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>

<script src="assets/js/restaurant.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>



<!-- <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script> -->
<script type="text/javascript" src="assets/js/daterangepicker.min2.js"></script>

</body>

</html>