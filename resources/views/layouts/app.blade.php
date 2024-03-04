<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    @stack('before-styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/scroll_to_top.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.equalheights.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
    <script src="{{ asset('js/touchTouch.jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.tools.min.js') }}"></script>
    <script src="{{ asset('js/tmStickUp.js') }}"></script>

    <!-- font-awesome font -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.css') }}" type="text/css" media="screen">
    <!-- fontello font -->

    <!--[if lt IE 8]>
		 <div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
	 <![endif]-->
    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	 <![endif]-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174150865-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-174150865-1');
    </script>

</head>

<body>
    <!--button back top-->
    <div id="back-top"><i class="fa fa-arrow-up"></i></div>
    <div class="main">
        <div class="div-content">

            <!--=======header=================================-->
            <!-- @include('layouts.header') -->

            <!--=======content================================-->

            @yield('content')

            <!--=======footer=================================-->
            <!-- @include('layouts.footer') -->

        </div>
    </div>

</body>

</html>