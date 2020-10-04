<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Auto Club</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('web-assets/images/favicon.png') }}" />

    <link href="{{asset('web-assets/css/master.css') }}" rel="stylesheet">

    
    <!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

    <div id="page-preloader"><span class="spinner"></span></div>

   @include('webapp.common.theme-header')
   
    @yield('body')

    @include('webapp.common.theme-footer')

    <script src="{{asset('web-assets/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('web-assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('web-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web-assets/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('web-assets/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('web-assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('web-assets/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('web-assets/js/classie.js')}}"></script>
    <script src="{{asset('web-assets/assets/switcher/js/switcher.js')}}"></script>
    <script src="{{asset('web-assets/assets/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web-assets/assets/bxslider/jquery.bxslider.js')}}"></script>
    <script src="{{asset('web-assets/assets/slider/jquery.ui-slider.js')}}"></script>
    <script src="{{asset('web-assets/js/jquery.smooth-scroll.js')}}"></script>
    <script src="{{asset('web-assets/js/wow.min.js')}}"></script>
    <script src="{{asset('web-assets/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('web-assets/js/theme.js')}}"></script>

    
    @yield('script')
    
</body>

</html>