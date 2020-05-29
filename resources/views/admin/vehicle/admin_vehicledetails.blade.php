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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Car Brand</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
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
                                        <h4 class="card-title">Create Car Brand</h4>
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
                                                        @if (isset($vehicleDetail))
                                                        <input type="hidden" name="vehicle_detail_id" value="{{ $vehicleDetail->id }}" />
                                                        @else 
                                                        <input type="hidden" name="vehicle_detail_id" value="" />
                                                        @endif
                                                        <div class="col s12 m6">
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter vehicle brand <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="vehiclebrand_id">
                                                                        @if (isset($vehicleDetail))
                                                                        <option {{ ("" == old('vehiclebrand_id') || "" == $vehicleDetail->vehiclebrand_id ?? '' ? "selected" : '') }}  value="">Select</option>
                                                                        <option {{ ("1" == old('vehiclebrand_id') || "1" == $vehicleDetail->vehiclebrand_id ?? "" ? "selected" : '') }}  value="1" >Honda</option>
                                                                        <option {{ ("2" == old('vehiclebrand_id') || "2" == $vehicleDetail->vehiclebrand_id ?? "" ? "selected" : '') }}  value="2">Toyota</option>
                                                                        <option {{ ("3" == old('vehiclebrand_id') || "3" == $vehicleDetail->vehiclebrand_id ?? ""? "selected" : '') }}  value="3">Suzuki</option>
                                                                        <option {{ ("4" == old('vehiclebrand_id') || "4" == $vehicleDetail->vehiclebrand_id ?? ""? "selected" : '') }}  value="4">Kia</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option value="1" >Honda</option>
                                                                        <option value="2">Toyota</option>
                                                                        <option value="3">Suzuki</option>
                                                                        <option value="4">Kia</option>
                                                                        @endif
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Vehicle Manufacturer Year<span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="year_manufacture">
                                                                        <option value="">Select</option>
                                                                        @if (isset($vehicleDetail))
                                                                            @for ($i = 0; $i < 25; $i++)
                                                                            <option {{ ($i +1998 == old('year_manufacture') || $i +1998 == $vehicleDetail->year_manufacture ? "selected" : '') }} >{{ $i +1998 }}</option>
                                                                            @endfor
                                                                        @else
                                                                            @for ($i = 0; $i < 25; $i++)
                                                                            <option>{{ $i +1998 }}</option>
                                                                            @endfor
                                                                        @endif
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>No. of Seats <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_seat">
                                                                        <option value="">Select</option>
                                                                        @if (isset($vehicleDetail))
                                                                        <option  {{ ("2" == old('number_seat') || "2" == $vehicleDetail->number_seat? "selected" : '') }}  >2</option>
                                                                        <option  {{ ("4" == old('number_seat') || "4" == $vehicleDetail->number_seat? "selected" : '') }}  >4</option>
                                                                        <option  {{ ("6" == old('number_seat') || "6" == $vehicleDetail->number_seat? "selected" : '') }}  >6</option>
                                                                        <option  {{ ("8" == old('number_seat') || "8" == $vehicleDetail->number_seat? "selected" : '') }}  >8</option>
                                                                        @else
                                                                        <option>2</option>
                                                                        <option >4</option>
                                                                        <option>6</option>
                                                                        <option>8</option>
                                                                        @endif
                                                                        
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select No. of Gears <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_gear">
                                                                        @if (isset($vehicleDetail))
                                                                        <option  {{ ("5" == old('number_gear') || "5" == $vehicleDetail->number_gear? "selected" : '') }}  >4</option>
                                                                        <option  {{ ("6" == old('number_gear') || "6" == $vehicleDetail->number_gear? "selected" : '') }}  >6</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option>5</option>
                                                                        <option >6</option>
                                                                        @endif
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Drive Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="drive_type">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("All Wheel Drive" == old('drive_type') || "All Wheel Drive" == $vehicleDetail->drive_type? "selected" : '') }} >All Wheel Drive</option>
                                                                        <option {{ ("Front Wheel Drive" == old('drive_type') || "Front Wheel Drive" == $vehicleDetail->drive_type? "selected" : '') }}  >Front Wheel Drive</option>
                                                                        <option {{ ("Rear Wheel Drive" == old('drive_type') || "Rear Wheel Drive" == $vehicleDetail->drive_type? "selected" : '') }}  >Rear Wheel Drive</option>
                                                                        <option {{ ("4WD" == old('drive_type') || "4WD" == $vehicleDetail->drive_type? "selected" : '') }}  >4WD</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option >All Wheel Drive</option>
                                                                        <option>Front Wheel Drive</option>
                                                                        <option>Rear Wheel Drive</option>
                                                                        <option>4WD</option>
                                                                        @endif
                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select No. of Cylinders <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_cylinder">
                                                                        @if (isset($vehicleDetail))
                                                                        <option>Select</option>
                                                                        <option {{ ("4" == old('number_cylinder') || "4" == $vehicleDetail->number_cylinder? "selected" : '') }} >4</option>
                                                                        <option {{ ("6" == old('number_cylinder') || "6" == $vehicleDetail->number_cylinder? "selected" : '') }} >6</option>
                                                                        <option {{ ("8" == old('number_cylinder') || "8" == $vehicleDetail->number_cylinder? "selected" : '') }} >8</option>
                                                                        @else
                                                                        <option>Select</option>
                                                                        <option >4</option>
                                                                        <option>6</option>
                                                                        <option>8</option>
                                                                        @endif

                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Fuel Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="fuel_type">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("CNG" == old('fuel_type') || "CNG" == $vehicleDetail->fuel_type? "selected" : '') }}  >CNG</option>
                                                                        <option {{ ("Petrol" == old('fuel_type') || "Petrol" == $vehicleDetail->fuel_type? "selected" : '') }}  >Petrol</option>
                                                                        <option {{ ("Diesel" == old('fuel_type') || "Diesel" == $vehicleDetail->fuel_type? "selected" : '') }}  >Diesel</option>
                                                                        <option {{ ("Hybrid" == old('fuel_type') || "Hybrid" == $vehicleDetail->fuel_type? "selected" : '') }}  >Hybrid</option>
                                                                        <option {{ ("Electric" == old('fuel_type') || "Electric" == $vehicleDetail->fuel_type? "selected" : '') }}  >Electric</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option>CNG</option>
                                                                        <option>Petrol</option>
                                                                        <option>Diesel</option>
                                                                        <option>Hybrid</option>
                                                                        <option>Electric</option>
                                                                        @endif
                                                                    </select>

                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6">
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter Vehicle Model <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="brandmodel_id">
                                                                        @if (isset($vehicleDetail))
                                                                        <option>Select a Model</option>
                                                                        <option {{ $vehicleDetail->brandmodel_id }} {{ ("1" == old('brandmodel_id') || "1" == $vehicleDetail->brandmodel_id? "selected" : '') }} value="1" >Civic</option>
                                                                        <option {{ $vehicleDetail->brandmodel_id }} {{ ("2" == old('brandmodel_id') || "2" == $vehicleDetail->brandmodel_id? "selected" : '') }} value="2">City</option>
                                                                        <option {{ $vehicleDetail->brandmodel_id }} {{ ("3" == old('brandmodel_id') || "3" == $vehicleDetail->brandmodel_id? "selected" : '') }} value="3">Corolla</option>
                                                                        <option {{ $vehicleDetail->brandmodel_id }} {{ ("4" == old('brandmodel_id') || "4" == $vehicleDetail->brandmodel_id? "selected" : '') }} value="4">Hummer</option>
                                                                        @else
                                                                        <option>Select a Model</option>
                                                                        <option value="1" >Civic</option>
                                                                        <option value="2">City</option>
                                                                        <option value="3">Corolla</option>
                                                                        <option value="4">Hummer</option>
                                                                        @endif

                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Body Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="body_type">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("Sedan" == old('body_type') || "Sedan" == $vehicleDetail->body_type? "selected" : '') }}  >Sedan</option>
                                                                        <option {{ ("Hatchback" == old('body_type') || "Hatchback" == $vehicleDetail->body_type? "selected" : '') }}  >Hatchback</option>
                                                                        <option {{ ("MUV/SUV" == old('body_type') || "MUV/SUV" == $vehicleDetail->body_type? "selected" : '') }}  >MUV/SUV</option>
                                                                        <option {{ ("Coupe" == old('body_type') || "Coupe" == $vehicleDetail->body_type? "selected" : '') }}  >Coupe</option>
                                                                        <option {{ ("Convertible" == old('body_type') || "Convertible" == $vehicleDetail->body_type? "selected" : '') }}  >Convertible</option>
                                                                        <option {{ ("Wagon" == old('body_type') || "Wagon" == $vehicleDetail->body_type? "selected" : '') }}  >Wagon</option>
                                                                        <option {{ ("Van" == old('body_type') || "Van" == $vehicleDetail->body_type? "selected" : '') }}  >Van</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option>Sedan</option>
                                                                        <option>Hatchback</option>
                                                                        <option>MUV/SUV</option>
                                                                        <option>Coupe</option>
                                                                        <option>Convertible</option>
                                                                        <option>Wagon</option>
                                                                        <option>Van</option>
                                                                        @endif

                                                                    </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>No. of Doors <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="number_door">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("2" == old('number_door') || "2" == $vehicleDetail->number_door? "selected" : '') }} >2</option>
                                                                        <option {{ ("4" == old('number_door') || "4" == $vehicleDetail->number_door? "selected" : '') }} >4</option>
                                                                        <option {{ ("5" == old('number_door') || "5" == $vehicleDetail->number_door? "selected" : '') }} >5</option>
                                                                        <option {{ ("6" == old('number_door') || "6" == $vehicleDetail->number_door? "selected" : '') }} >6</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option >2</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        @endif

                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Vehicle Transmission Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="tranmission_type">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("Automatic Transmission (AT)" == old('tranmission_type') || "Automatic Transmission (AT)" == $vehicleDetail->tranmission_type? "selected" : '') }} >Automatic Transmission (AT)</option>
                                                                        <option {{ ("Manual Transmission (MT)" == old('tranmission_type') || "Manual Transmission (MT)" == $vehicleDetail->tranmission_type? "selected" : '') }} >Manual Transmission (MT)</option>
                                                                        <option {{ ("Automated Manual Transmission (AM)" == old('tranmission_type') || "Automated Manual Transmission (AM)" == $vehicleDetail->tranmission_type? "selected" : '') }} >Automated Manual Transmission (AM)</option>
                                                                        <option {{ ("Continuously Variable Transmission (CVT)" == old('tranmission_type') || "Continuously Variable Transmission (CVT)" == $vehicleDetail->tranmission_type? "selected" : '') }} >Continuously Variable Transmission (CVT)</option>
                                                                        @else
                                                                        <option value="">Select</option>
                                                                        <option>Automatic Transmission (AT)</option>
                                                                        <option>Manual Transmission (MT)</option>
                                                                        <option>Automated Manual Transmission (AM)</option>
                                                                        <option>Continuously Variable Transmission (CVT)</option>
                                                                        @endif
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Select Engine Type <span>*</span></label>
                                                                <div class='s-relative'>
                                                                    <select class="m-select" name="engine_type">
                                                                        @if (isset($vehicleDetail))
                                                                        <option value="">Select</option>
                                                                        <option {{ ("Manual" == old('engine_type') || "Manual" == $vehicleDetail->engine_type ? "selected" : '') }}  >Manual</option>
                                                                        <option {{ ("Automatic" == old('engine_type') || "Automatic" == $vehicleDetail->engine_type ? "selected" : '') }}  >Automatic </option>
                                                                        <option {{ ("Hybrid" == old('engine_type') || "Hybrid" == $vehicleDetail->engine_type ? "selected" : '') }}  >Hybrid</option>
                                                                    @else
                                                                        <option value="">Select</option>
                                                                        <option>Manual</option>
                                                                        <option >Automatic </option>
                                                                        <option>Hybrid</option>
                                                                    @endif
                                                                        </select>
                                                                    <span class="fa fa-caret-down"></span>
                                                                </div>
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter Engine Capacity <span>*</span></label>
                                                                @if (isset($vehicleDetail))
                                                                <input placeholder="Enter Capacity" type="text" name="engine_capacity" value="{{ old('engine_capacity') || $vehicleDetail->engine_capacity  }}"  />
                                                                @else
                                                                <input placeholder="Enter Capacity" type="text" name="engine_capacity" value="{{ old('engine_capacity') }}"  />
                                                                @endif
                                                            </div>
                                                            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                                                <label>Enter VIN/Chassis Number <span>*</span></label>
                                                                @if (isset($vehicleDetail))
                                                                <input placeholder="Enter Number" type="text" name="chasis_number"  value="{{ old('chasis_number') || $vehicleDetail->chasis_number  }}"  />
                                                                @else
                                                                <input placeholder="Enter Number" type="text" name="chasis_number"  value="{{ old('chasis_number') }}"  />
                                                                @endif
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