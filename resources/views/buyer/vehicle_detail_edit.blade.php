<!DOCTYPE html>
<html class="loading" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
        href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-authentication')}}">
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Create Car Ad</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('vehicle.getall') }}">Vehicle</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('vehicle.details') }}">Car Ad</a>
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
                                        <h4 class="card-title">Create Car Ad</h4>
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
                                                    <form class="col s12" action="{{ route('vehicle.details.create') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="vehicle_detail_id" value="" />
                                                        <div class="col s12 m6">
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter Car Manufacturer <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="carmanufacturer_id">
                                                                        <option value="">Select</option>
                                                                        @foreach (\App\CarManufacturer::orderBy('brand_name', 'asc')->get() as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Vehicle Manufacturer Year<span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="year_manufacture">
                                                                        <option value="">Select</option>
                                                                       
                                                                            @for ($i = 0; $i < 25; $i++)
                                                                            <option>{{ $i +1998 }}</option>
                                                                            @endfor
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>No. of Seats <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_seat">
                                                                        <option value="">Select</option>
                                                                        <option>2</option>
                                                                        <option>4</option>
                                                                        <option>6</option>
                                                                        <option>8</option>
                                                                        
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s" style="display: none">
                                                                <label>Select No. of Gears <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_gear">
                                                                        <option value="0">Select</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Drive Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="drive_type">
                                                                        <option value="">Select</option>
                                                                        <option>All Wheel Drive</option>
                                                                        <option>Front Wheel Drive</option>
                                                                        <option>Rear Wheel Drive</option>
                                                                        <option>4WD</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Fuel Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="fuel_type">
                                                                        <option value="">Select</option>
                                                                        <option>CNG</option>
                                                                        <option>Petrol</option>
                                                                        <option>Diesel</option>
                                                                        <option>Hybrid</option>
                                                                        <option>Electric</option>
                                                                    </select>

                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6">
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter Vehicle Model <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="carmodel_id" value="{{ 2 }}">
                                                                        <option>Select a Model</option>
                                                                        @foreach ( \App\CarModel::all() as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->model_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Body Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="body_type">
                                                                        <option value="">Select</option>
                                                                        <option>Sedan</option>
                                                                        <option>Hatchback</option>
                                                                        <option>MUV/SUV</option>
                                                                        <option>Coupe</option>
                                                                        <option>Convertible</option>
                                                                        <option>Pickup</option>
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>No. of Doors <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_door">
                                                                        <option value="">Select</option>
                                                                        <option >2</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Vehicle Transmission Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="tranmission_type">
                                                                        <option value="">Select</option>
                                                                        <option>Automatic Transmission (AT)</option>
                                                                        <option>Manual Transmission (MT)</option>
                                                                        <option>Automated Manual Transmission (AM)</option>
                                                                        <option>Continuously Variable Transmission (CVT)</option>
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s" style="display: none">
                                                                <label>Select Engine Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="engine_type">
                                                                        <option value="0">Select</option>
                                                                        <option>Manual</option>
                                                                        <option>Automatic </option>
                                                                        <option>Hybrid</option>
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter Engine Capacity <span>*</span></label>
                                                                {{--  <input placeholder="Enter Capacity" type="text" name="engine_capacity" value="{{ old('engine_capacity') }}"  />  --}}
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="engine_capacity" value="{{ old('engine_capacity') }}">
                                                                        <option value="">Select</option>
                                                                        <option>650 CC</option>
                                                                        <option>800 CC</option>
                                                                        <option>1000 CC</option>
                                                                        <option>1300 CC</option>
                                                                        <option>1500 CC</option>
                                                                        <option>1600 CC</option>
                                                                        <option>1800 CC</option>
                                                                        <option>2000 CC</option>
                                                                        <option>2500 CC</option>
                                                                        <option>2700 CC</option>
                                                                        <option>3000 CC</option>
                                                                        <option>3500 CC</option>
                                                                        <option>4000 CC</option>
                                                                        <option>4700 CC</option>
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter VIN/Chassis Number <span>*</span></label>
                                                                <input placeholder="Enter Number" type="text" name="chasis_number"  value="{{ old('chasis_number') }}"  />
                                                            </div>
                                                        </div>
                                                        <div class=" right">
                                                            <button  class="btn red">Cancel</button>
                                                            <button type="submit" class="btn blue ">Next</button>
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