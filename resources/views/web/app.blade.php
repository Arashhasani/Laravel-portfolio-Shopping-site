<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 11:25 AM
 */

?>





        <!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   @yield('title')
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/web/assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="/web/assets/css/preloader.css">
    <link rel="stylesheet" href="/web/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web/assets/css/slick.css">
    <link rel="stylesheet" href="/web/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/web/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/web/assets/css/animate.min.css">
    <link rel="stylesheet" href="/web/assets/css/backToTop.css">
    <link rel="stylesheet" href="/web/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/web/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="/web/assets/css/elegantFont.css">
    <link rel="stylesheet" href="/web/assets/css/default.css">
    <link rel="stylesheet" href="{{asset('/web/css/main.css')}}">
</head>
<body style="font-family: 'Vazir', sans-serif;">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two" style="left:20px;"></div>
            <div class="object" id="object_three" style="left:40px;"></div>
            <div class="object" id="object_four" style="left:60px;"></div>
            <div class="object" id="object_five" style="left:80px;"></div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

@include('web.layout.header')

@yield('content')






@include('web.layout.footer')

<!-- JS here -->
<script src="/web/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/web/assets/js/vendor/waypoints.min.js"></script>
<script src="/web/assets/js/bootstrap.bundle.min.js"></script>
<script src="/web/assets/js/jquery.meanmenu.js"></script>
<script src="/web/assets/js/slick.min.js"></script>
<script src="/web/assets/js/jquery.fancybox.min.js"></script>
<script src="/web/assets/js/isotope.pkgd.min.js"></script>
<script src="/web/assets/js/parallax.min.js"></script>
<script src="/web/assets/js/owl.carousel.min.js"></script>
<script src="/web/assets/js/backToTop.js"></script>
<script src="/web/assets/js/jquery.counterup.min.js"></script>
<script src="/web/assets/js/ajax-form.js"></script>
<script src="/web/assets/js/wow.min.js"></script>
<script src="/web/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/web/assets/js/main.js"></script>
</body>
<script src="{{asset('/js/app.js')}}"></script>
@include('sweet::alert')
</html>


