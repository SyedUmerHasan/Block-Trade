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


    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/eCommerce-products-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/noUiSlider/nouislider.min.css') }}">

</head>


<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    @include('Theme.common-template.admin-sidebar')

    <div id="main">
        <div class="content-wrapper-before">
            <img src="/maskgroup.png" style="width: 100%; height: 100%;" srcset="">
        </div>
        <div class="row" id="ecommerce-products">
            
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="button-trigger" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Create Post</h4>
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
                                            
                                            @if ($message = Session::get('error'))
                                            <div class="card-alert card red">
                                                <div class="card-content white-text">
                                                  <p>Danger : {{ $message }}</p>
                                                </div>
                                                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            @endif

                                                <div class="row">
                                                    <form class="col s12" action="{{ route('post.add') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" class="form-control" id="heading" name="heading" aria-describedby="helpId"  >
                                                                <label for="heading">Enter Post Heading</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <select class="form-control browser-default" name="category" id="new" >
                                                                    <option>Select Category</option>
                                                                    <option>Music</option>   
                                                                    <option>Social</option>
                                                                    <option>Gaming</option>
                                                                    <option>Technology</option>
                                                                    <option>Medical</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <div class="file-field input-field">
                                                                    <div class="btn float-right">
                                                                      <span>File</span>
                                                                      <input type="file" name="image_url">
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                      <input class="file-path validate" type="text">
                                                                    </div>
                                                                  </div>        
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" class="form-control" id="crowd_price" name="crowd_price" aria-describedby="helpId"  >
                                                                <label for="crowd_price">Amount need to raise</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label for="details">Enter Post Details</label>
                                                                <input type="text" class="form-control" id="details" name="details" aria-describedby="helpId"  >
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

        </div>
    </div>

    <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/noUiSlider/nouislider.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/advance-ui-modals.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>
</body>

</html>