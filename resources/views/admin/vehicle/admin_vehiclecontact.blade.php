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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Car Registration Details</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('vehicle.getall') }}">Vehicle</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('vehicle.contact', $vehicleDetail->id) }}">Car Registration Details</a>
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
                                        <h4 class="card-title">Add Car Registration Details</h4>
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
                                                    <form class="col s12" action="{{ route('vehicle.contact.create', $vehicleDetail->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $vehicleDetail->id }}" name="vehicledetail_id" />

                                                        <div class="row">
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <input type="number" class="form-control" id="price" name="price" aria-describedby="helpId" value="{{ $vehicleContact->price ?? '' ? $vehicleContact->price : '' }}" >
                                                                        <label for="price">Enter Vehicle Price</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <input type="number" class="form-control" id="mileage" name="mileage" aria-describedby="helpId"  value="{{ $vehicleContact->mileage ?? '' ? $vehicleContact->mileage : '' }}" >
                                                                        <label for="mileage">Enter Vehicle Mileage</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <select class="m-select" name="exterior_color"  >
                                                                            <option value="">Select</option>
                                                                            @if (isset($vehicleContact))
                                                                                @foreach ($exteriorcolor as $item)
                                                                                    <option value="{{ $item->id }}" {{ ($item->id == old('exterior_color') || $item->id ==   $vehicleContact->exterior_color ? "selected" : '') }}>{{ $item->color_name }}</option>
                                                                                @endforeach
                                                                            @else
                                                                                @foreach ($exteriorcolor as $item)
                                                                                    <option value="{{ $item->id }}">{{ $item->color_name }}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                        <label for="exterior_color">Enter Vehicle Exterior Color</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <input type="text" class="form-control" id="etcregistered" name="etcregistered" aria-describedby="helpId"  >
                                                                        <label>
                                                                            @if (isset($vehicleContact))
                                                                            <input type="checkbox" value="true" name="registered"  class="checkbox-value"  id="registered"  {{ $vehicleContact->registered == 1 ?? '' ?  'checked="checked"' : 'nonchecked' }} >
                                                                            @else
                                                                            <input type="checkbox" value="true" name="registered"  class="checkbox-value"  id="registered"  >
                                                                            @endif
                                                                            <span class="s-submitCheck" for="abs">Is Vehicle Registered?</span>
                                                                        </label>                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        @if (isset($vehicleContact))
                                                                        <input type="text" class="form-control" id="registration_plate_number" name="registration_plate_number" aria-describedby="helpId"  value="{{ $vehicleContact->registration_plate_number ?? '' ? $vehicleContact->registration_plate_number : '' }}" >
                                                                        @else
                                                                        <input type="text" class="form-control" id="registration_plate_number" name="registration_plate_number" aria-describedby="helpId" >
                                                                        @endif
                                                                        <label for="registration_plate_number">Enter Registeration Plate Number</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <input type="text" class="form-control" id="registration_vehicle_number" name="registration_vehicle_number" aria-describedby="helpId"  value="{{ $vehicleContact->registration_vehicle_number ?? '' ? $vehicleContact->registration_vehicle_number : '' }}" >
                                                                        <label for="registration_vehicle_number">Enter Vehicle Registeration Number</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <select class="m-select" name="registration_exiry_month"  >
                                                                            <option value="">Select</option>
                                                                            <option>January</option>
                                                                            <option>Feburary</option>
                                                                            <option>March</option>
                                                                            <option>April</option>
                                                                            <option>May</option>
                                                                            <option>June</option>
                                                                            <option>July</option>
                                                                            <option>August</option>
                                                                            <option>September</option>
                                                                            <option>October</option>
                                                                            <option>November</option>
                                                                            <option>December</option>
                                                                        </select>
                                                                        <label for="registration_exiry_month">Enter Registration Expiry Month</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <select class="m-select" name="registration_exiry_year" >
                                                                            <option value="">Select</option>
                                                                            @if (isset($vehicleContact))
                                                                                @for ($i = 25; $i > 0; $i--)
                                                                                    <option {{ (2021 - $i == old('registration_exiry_year') || 2021 - $i == $vehicleContact->registration_exiry_year ? "selected" : '') }} > {{ 2021 - $i }}</option>
                                                                                @endfor
                                                                            @else
                                                                                @for ($i = 25; $i > 0; $i--)
                                                                                    <option> {{ 2021 - $i }}</option>
                                                                                @endfor
                                                                            @endif
                                                                        </select> 
                                                                        <label for="registration_exiry_year">Enter Registration Expiry Year</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <h4 class="card-title">Add Car Contact Details</h4>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                    <div class="row">
                                                                        <div class="input-field col s12">
                                                                            <input type="text" class="form-control" id="vehicle_address" name="vehicle_address" aria-describedby="helpId"   value="{{ $vehicleContact->vehicle_address ?? '' ? $vehicleContact->vehicle_address : '' }}" >
                                                                            <label for="vehicle_address">Enter Vehicle Address</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                    <div class="row">
                                                                        <div class="input-field col s12">
                                                                            <input type="text" class="form-control" id="vehicle_city" name="vehicle_city" aria-describedby="helpId" value="{{ $vehicleContact->vehicle_city ?? '' ? $vehicleContact->vehicle_city : '' }}" >
                                                                            <label for="vehicle_city">Enter Vehicle City</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                    <div class="row">
                                                                        <div class="input-field col s12">
                                                                            <input type="text" class="form-control" id="vehicle_country" name="vehicle_country" aria-describedby="helpId"   value="{{ $vehicleContact->vehicle_country ?? '' ? $vehicleContact->vehicle_country : '' }}" >
                                                                            <label for="vehicle_country">Enter Vehicle Country</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                    <div class="row">
                                                                        <div class="input-field col s12">
                                                                            <input type="text" class="form-control" id="vehicle_phone" name="vehicle_phone" aria-describedby="helpId"   value="{{ $vehicleContact->vehicle_phone ?? '' ? $vehicleContact->vehicle_phone : '' }}" >
                                                                            <label for="vehicle_phone">Enter Contact Phone Number</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                    <div class="row">
                                                                        <div class="input-field col s12">
                                                                            <input type="text" class="form-control" id="vehicle_email" name="vehicle_email" aria-describedby="helpId"   value="{{ $vehicleContact->vehicle_email ?? '' ? $vehicleContact->vehicle_email : '' }}" >
                                                                            <label for="vehicle_email">Enter Owner Email</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class=" right">
                                                                <button  class="btn red">Cancel</button>
                                                                <button type="submit" class="btn blue ">Create</button>
                                                            </div>
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