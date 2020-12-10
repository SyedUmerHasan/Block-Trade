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
                        
                        @foreach ($post as $item)
                        <div class="row">
                            <div class="col s12">
                                <div class="card animate fadeUp">
                                  <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                  <div class="card-content">
                                    <div class="row" id="product-four">
                                      <div class="col m6 s12">
                                        <img src="{{ $item->image }}" class="responsive-img" alt="">
                                      </div>
                                      <div class="col m6 s12">
                                        <p>{{ $item->category }}</p>
                                        <h5>
                                            <a href="{{ route('feed', $item->slug) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $item->heading }}

                                            </a>
                                        </  h5>
                                        <span class="card-title ">
                                            {{ $item->details }}
                                        </span>
                                        <h5 class="red-text"> ({{ $item->crowd_price }}) Likoin Left <span class="grey-text lighten-2 ml-3">Total required ({{ $item->crowd_price }})</span> </h5>
                                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2 mr-2">Like</a>
                                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">Share</a>
                                        <div class="display-flex justify-content-between flex-wrap col s12 m12 l12 mt-4">
                                            <div class="display-flex align-items-center col s8 m8 l8">
                                                <a href="{{ route('profile.view', $item->user->id) }}" target="_blank" rel="noopener noreferrer" style="width: 100%">
                                                    @if (empty($item->user->image_url))
                                                    <img src="/admin-assets/app-assets/images/user/1.jpg" width="36" alt="news" class="circle mr-10 vertical-text-middle">
                                                    @else
                                                    <img src="{{  $item->user->image_url }}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
                                                    @endif
                                                  <span class="pt-2">{{ $item->user->first_name }} {{ $item->user->last_name }}</span>
                                                </a>
                                            </div>
                                            <div class="display-flex right-align social-icon col s4 m4 l4">
                                                <a href="http://localhost:3000/" target="_blank" rel="noopener noreferrer" style="width: 100%">
                                                    <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">{{ $item->like_count }}</span>
                                                    <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">{{ $item->share_count }}</span>
                                                </a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


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