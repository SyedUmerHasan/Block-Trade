<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
          href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon"
          href="{{asset("admin-authentication")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/intro.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/charts-sparkline.css') }}">

    <style>
        .flex {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>


<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    @include('Theme.common-template.admin-sidebar') 
    

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                  <div class="row">
                    <div class="col s10 m6 l6">
                      <h5 class="breadcrumbs-title mt-0 mb-0"><span>Welcome</span></h5>
                      <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Dashboard</a>
                        </li>
                      </ol>
                    </div>

                  </div>
                </div>
              </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">

                          <div id="card-panel-type" class="section">
                            <div class="row mt-2 flex" style="width: 100%">
                                <div class="card" style="width: 100%">
                                    <div class="card-content" style="width: 100%">
                                        <p class="caption"><h5>Welcome {{ Auth::user()->first_name }}</h5></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 flex">
                                @foreach ($vehicleStatus as $item)
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{ $item->VehicleImages[0]->image_path }}" alt="images">
                                        <h6><a href="#" class="mt-5">{{ $item->car_title }}</a></h6>
                                        <p>{{ $item->VehicleDetail->comments }}</p>
                                        <div class="row mt-4 flex">
                                            <div class="col s2" >
                                                <a href="#"><img src="http://127.0.0.1:8000/admin-assets/app-assets/images/avatar/avatar-8.png" width="40" alt="fashion" class="z-depth-4 circle"></a>
                                            </div>
                                            <div class="col s6 p-0 mt-1 valign-wrapper">
                                                <a href="#">
                                                    <span class="pt-2">{{ $item->teacher_first_name }}</span>
                                                </a>
                                            </div>
                                            <div class="col s4 mt-1 valign-wrapper">
                                                <a href="#"><span class="material-icons">edit</span></a>
                                                <a href="#"><span class="material-icons ml-10">delete</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                  
                                @endforeach

                            </div>
                          </div>
                    </div>

                    @include('Theme.common-template.admin-rightside-bar')


                    {{--  Intro Modal  --}}
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


    @include('Theme.common-template.admin-footer')

    </body>

    <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/vendors/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/js/scripts/dashboard-modern.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/intro.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/charts-sparklines.js') }}"></script>

</html>