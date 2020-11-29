<!DOCTYPE html>
<html class="loading" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
        href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("admin-authentication")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.4/css/responsive.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/intro.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/charts-sparkline.css') }}">


</head>


<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Car Manufacturer</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('automotive.manufacturer.getall') }}">Car Manufacturer</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('automotive.manufacturer.create') }}">Create</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="button-trigger" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Create Car Manufacturer</h4>
                                        <div class="row">
                                            <div class="col s12">

                                                @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                <div class="card-alert card red">
                                                    <div class="card-content white-text">
                                                    <p>DANGER : {{ $error }}</p>
                                                    </div>
                                                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                @endforeach
                                            @endif
                                            
                                            @if ($message = Session::get('success'))
                                            <div class="card-alert card green">
                                                <div class="card-content white-text">
                                                  <p>SUCCESS : {{ $message }}</p>
                                                </div>
                                                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            @endif

                                                <div class="row">
                                                    <form class="col s12" action="{{ route('vehicle.publish.create', $vehicleDetail->id) }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" class="form-control" id="car_title" name="car_title" aria-describedby="helpId" value="{{ $vehicleStatus->car_title ?? '' ? $vehicleStatus->car_title :''  }}"  >
                                                                <label for="car_title">Enter Ad Title</label>
                                                            </div>
                                                        </div>
                                                        <div class=" right">
                                                            <button  class="btn red">Cancel</button>
                                                            <button type="submit" class="btn blue ">Create</button>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-overlay"></div>
                    </div>
                </div>
            </div>



            @include('Theme.common-template.admin-footer')

            <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>
            
</body>

</html>