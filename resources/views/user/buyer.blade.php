<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Material Design Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/noUiSlider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/css/pages/eCommerce-products-page.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">
</head>

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-gradient-menu" data-col="2-columns">

    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen"
                            href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only search-input-wrapper"><a
                            class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                            data-target="notifications-dropdown"><i class="material-icons">notifications_none<small
                                    class="notification-badge">5</small></i></a>
                        <ul class="dropdown-content" id="notifications-dropdown" tabindex="0">
                            <li tabindex="0">
                                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                            </li>
                            <li class="divider" tabindex="0"></li>
                            <li tabindex="0"><a class="black-text" href="#!"><span
                                        class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new
                                    order has been
                                    placed!</a>
                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours
                                    ago</time>
                            </li>
                            <li tabindex="0"><a class="black-text" href="#!"><span
                                        class="material-icons icon-bg-circle red small">stars</span>
                                    Completed the task</a>
                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days
                                    ago</time>
                            </li>
                            <li tabindex="0"><a class="black-text" href="#!"><span
                                        class="material-icons icon-bg-circle teal small">settings</span>
                                    Settings updated</a>
                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days
                                    ago</time>
                            </li>
                            <li tabindex="0"><a class="black-text" href="#!"><span
                                        class="material-icons icon-bg-circle deep-orange small">today</span> Director
                                    meeting started</a>
                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days
                                    ago</time>
                            </li>
                            <li tabindex="0"><a class="black-text" href="#!"><span
                                        class="material-icons icon-bg-circle amber small">trending_up</span> Generate
                                    monthly report</a>
                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week
                                    ago</time>
                            </li>
                        </ul>
                    </li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                            data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                    src="/profile/1601829944DSC_0088.JPG" alt="avatar"><i></i></span></a>
                        <ul class="dropdown-content" id="profile-dropdown" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-1"
                                    href="http://127.0.0.1:8000/profile/view/1"><i
                                        class="material-icons">person_outline</i> Profile</a></li>
                            <li tabindex="0"><a class="grey-text text-darken-1" href="#"><i
                                        class="material-icons">chat_bubble_outline</i> Chat</a></li>
                            <li tabindex="0"><a class="grey-text text-darken-1" href="#"><i
                                        class="material-icons">help_outline</i>
                                    Help</a></li>
                            <li class="divider" tabindex="0"></li>
                            <li tabindex="0"><a class="grey-text text-darken-1" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="material-icons">lock_outline</i>
                                    Logout
                                </a></li>

                            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST"
                                style="display: none;" tabindex="0">
                                <input type="hidden" name="_token" value="lLSTDfuNmIjDgMFfYllySbeoxyOLR7uddCZoOe8W">
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <aside
        class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark gradient-45deg-deep-purple-blue sidenav-gradient sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img class="hide-on-med-and-down "
                        src="{{ asset('/admin-assets/app-assets/images/logo/materialize-logo.png') }}" /><img
                        class="show-on-medium-and-down hide-on-med-and-up"
                        src="{{ asset('/admin-assets/app-assets/images/logo/materialize-logo-color.png') }}" /><span
                        class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler"
                    href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="menu-accordion">
            @include('user.navbar')
        </ul>
        <div class="navigation-background"></div><a
            class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>


    <div id="main">
        <div class="row">
            <div class="pt-3 pb-1" id="breadcrumbs-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Dashboard</span></h5>
                        </div>
                        <div class="col s12 m12 l12">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row" id="ecommerce-products">
                            <div class="col s12 m12 l12 pr-0">
                                <div class="col s12">
                                    
                                    @for ($i = 0; $i < 1; $i++)
                                    <div class="card animate fadeUp">
                                        <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                        <div class="card-content">

                                            <div class="row" id="product-four">
                                                <div class="col m6 s12">
                                                    <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1778&amp;q=80"
                                                        class="responsive-img" alt="">
                                                </div>
                                                <div class="col m6 s12">
                                                    <p>Powerbank</p>
                                                    <h5>Game Remote</h5>
                                                    <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                        Star</span>
                                                    <p>Availability: <span class="green-text">Available</span></p>
                                                    <hr class="mb-5">
                                                    <span class="vertical-align-top mr-4"><i
                                                            class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                    <ul class="list-bullet">
                                                        <li class="list-item-bullet">Dual output USB interfaces</li>
                                                        <li class="list-item-bullet">Compatible with all smartphones
                                                        </li>
                                                        <li class="list-item-bullet">Portable design and light weight
                                                        </li>
                                                        <li class="list-item-bullet">Battery type: Lithium-ion</li>
                                                    </ul>
                                                    <h5 class="red-text">$79.00 <span
                                                            class="grey-text lighten-2 ml-3">$199.00</span> </h5>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2 mr-2">ADD
                                                        TO
                                                        CART</a>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">BUY
                                                        NOW</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endfor
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

    <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/noUiSlider/nouislider.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/search.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/advance-ui-modals.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/eCommerce-products-page.min.js') }}"></script>
</body>

</html>
