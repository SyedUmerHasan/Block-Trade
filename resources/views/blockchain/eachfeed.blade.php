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

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/user-profile-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">


    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/css/pages/eCommerce-products-page.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/vendors/noUiSlider/nouislider.min.css') }}">

</head>


<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    @include('Theme.common-template.admin-sidebar')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before">
                <img src="/maskgroup.png" style="width: 100%; height: 100%;" srcset="">
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row user-profile mt-1 ml-0 mr-0">
                            <img class="responsive-img" alt=""
                                src="/admin-assets/app-assets/images/gallery/profile-bg.png">
                        </div>
                        <div class="section" id="user-profile">
                            <div class="row">
                                <!-- User Profile Feed -->
                                <div class="col s12 m4 l3 user-section-negative-margin">
                                    <div class="row">
                                        <div class="col s12 center-align">
                                            @if (empty($post->user->image_url))
                                            <img class="responsive-img circle z-depth-5" width="120" src="/admin-assets/app-assets/images/user/1.jpg" alt="">
                                            @else
                                            <img class="responsive-img circle z-depth-5" width="120" src="{{ $post->user->image_url }}" alt="">
                                            @endif
                                            <br>
                                            {{--  removefollowing  --}}
                                            @if ($follow_sensor >0)
                                            <a class="waves-effect waves-light btn mt-5 border-radius-4" href="{{ route('removefollowing',[Auth::id(),$post->user->id]) }}">UnFollow</a>
                                            @else
                                            <a class="waves-effect waves-light btn mt-5 border-radius-4" href="{{ route('addfollowing',[Auth::id(),$post->user->id]) }}"> Follow</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <h5>{{ $post->user->first_name }} {{ $post->user->last_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col s6">
                                            <h6>Follower</h6>
                                            <h5 class="m-0"><a href="#">{{ $follower_count }}</a></h5>
                                        </div>
                                        <div class="col s6">
                                            <h6>Following</h6>
                                            <h5 class="m-0"><a href="#">{{ $following_count }}</a></h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mt-5">
                                        <div class="col s12">
                                            <h6>Posts</h6>
                                            <h5 class="m-0"><a href="#">1</a></h5>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>

                                <div class="col s12 m8 l9">
                                    <div class="row">
                                        <div class="card user-card-negative-margin z-depth-0" id="feed">
                                            <div class="card-content card-border-gray">
                                                
                                                <div class="row mt-5">
                                                    <div class="col s1 pr-0 circle">
                                                        <a href="#">
                                                            @if (empty($post->user->image_url))
                                                            <img class="responsive-img circle" src="/admin-assets/app-assets/images/user/1.jpg" alt="">
                                                            @else
                                                            <img class="responsive-img circle" src="{{ $post->user->image_url }}" alt="">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="col s11">
                                                        <a href="{{ route('profile.view', $post->user->id) }}">
                                                            <p class="m-0">
                                                                {{ $post->user->first_name }} {{ $post->user->last_name }}
                                                                <span><i class="material-icons vertical-align-bottom">access_time</i>
                                                                    1 days left
                                                                </span>
                                                            </p>
                                                        </a>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="card card-border z-depth-2">
                                                                    <div class="card-image">
                                                                        <img src="{{ $post->image }}" alt="">
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <p>{{ $post->category }}</p>
                                                                        <h6 class="font-weight-900 text-uppercase">
                                                                            <a href="#">{{ $post->heading }}</a>
                                                                        </h6>
                                                                        <p>
                                                                            {{ $post->details }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="social-icon">
                                                                    <span>
                                                                        <i class="material-icons vertical-align-bottom mr-1">favorite_border</i>
                                                                        {{ $post->like_count }}
                                                                    </span>
                                                                    <span>
                                                                        <i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i>
                                                                        {{ $post->share_count }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    {{--  <div id="main">
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
            </ h5>
            <span class="card-title ">
                {{ $item->details }}
            </span>
            <h5 class="red-text">${{ $item->crowd_price }} <span
                    class="grey-text lighten-2 ml-3">${{ $item->crowd_price }}</span> </h5>
            <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2 mr-2">Like</a>
            <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">Share</a>
            <div class="display-flex justify-content-between flex-wrap col s12 m12 l12 mt-4">
                <div class="display-flex align-items-center col s8 m8 l8">
                    @if (empty($item->user->image_url))
                    <img src="/admin-assets/app-assets/images/user/1.jpg" width="36" alt="news"
                        class="circle mr-10 vertical-text-middle">
                    @else
                    <img src="{{  $item->user->image_url }}" width="36" alt="news"
                        class="circle mr-10 vertical-text-middle">
                    @endif
                    <span class="pt-2">{{ $item->user->first_name }} {{ $item->user->last_name }}</span>
                </div>
                <div class="display-flex right-align social-icon col s4 m4 l4">
                    <span class="material-icons">favorite_border</span> <span
                        class="ml-3 vertical-align-top">{{ $item->like_count }}</span>
                    <span class="material-icons ml-10">chat_bubble_outline</span> <span
                        class="ml-3 vertical-align-top">{{ $item->share_count }}</span>
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
    </div> --}}

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