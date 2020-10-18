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

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/magnific-popup/magnific-popup.css">

    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">

    <style>
        .flexrow {
            display: flex;
          }
          
        .flexcol {
            display: flex;
            flex-direction: flex-wrap;
        }

    </style>

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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Vehicle Images</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Vehicle</a>
                                </li>
                                <li class="breadcrumb-item active">Images
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="section">
                            <div class="card">
                                <div class="card-content">
                                    <p class="caption">This page shows all of the Vehicle Images to be seen and analysed before approving Ad</p>
                                    <form action="{{ route('vehicle.images.create', $vehicleDetail->id) }}" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            @csrf
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="vehicle_images[]" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                                </div>
                                            </div>

                                            <div class="col m12 s12">
                                                <div class=" right">
                                                    <button  class="btn red">Cancel</button>
                                                    <button type="submit" class="btn blue ">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="masonry-gallery-wrapper">
                                <div class="popup-gallery">
                                    <div class="gallery-sizer"></div>
                                    <div class="row flexrow">
                                        @foreach ($vehicleImages as $item)
                                        <div class="col s12 m6 l4 xl2 flexcol">
                                            <div>
                                                <a href="{{ $item->image_path }}" title="The Cleaner">
                                                    <img src="{{ $item->image_path }}" class="responsive-img mb-10"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
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


</body>
@include('Theme.common-template.admin-footer')


<script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
<script src="/admin-assets/app-assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/admin-assets/app-assets/vendors/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>
<script src="/admin-assets/app-assets/js/scripts/media-gallery-page.js"></script>

</html>