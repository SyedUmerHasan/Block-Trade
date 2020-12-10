<div id="top-bar">
    <div class="container">

        <div class="clearfix top-bar-wrapper">

            <div class="pull-right hidden-xs">
                @guest
                <div class="header-login-url">
                    <a href="{{ route('login') }}" class="external" rel="nofollow">
                        <i class="fa fa-user"></i><span class="vt-top">Login</span>
                    </a>
                    <span class="vertical-divider"></span>
                    <a href="{{ route('register') }}" class="external" rel="nofollow">Register</a>
                </div>
                @endguest
                @auth
                <div class="header-login-url">
                    <a href="{{ route('profile.view', Auth::user()->id) }}" class="external" rel="nofollow">
                        <i class="fa fa-user"></i><span class="vt-top">Welcome {{ Auth::user()->user_name }}</span>
                    </a>
                </div>
                @endauth
            </div>

            <div class="pull-right xs-pull-left">
                <ul class="top-bar-info clearfix">
                    <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 8.00</li>
                    <li>
                        <i class="fa fa-map-marker"></i> Fast NUCES, Karachi </span>
                    </li>
                    <li><i class="fa fa-phone"></i> Phone Number</li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div id="header">

    <div class="header-main">
        <div class="container">
            <div class="clearfix">

                <div class="logo-main">
                    <a class="bloglogo external" href="/" rel="nofollow">
                        <img src="/wp-content/uploads/2015/12/logo.svg" style="width: 138px;" title="Home" alt="Logo" />
                    </a>

                    <div class="mobile-menu-trigger visible-sm visible-xs">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="mobile-menu-holder">
                    <ul class="header-menu clearfix">
                        <li id="menu-item-202"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-202">
                            <a href="/" aria-current="page">Home</a>
                        </li>
                    </ul>
                </div>

                <div class="header-top-info" style="margin-top: 0px;">
                    <div class="clearfix">




                        <div class="pull-right">
                            <div class="header-main-socs">
                                <ul class="clearfix">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="external"
                                            rel="nofollow">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank" class="external"
                                            rel="nofollow">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="pull-right">
                            <div class="header-secondary-phone">
                                <div class="phone">
                                    <span class="phone-label">Service :</span>
                                    <span class="phone-number heading-font"><a
                                            href="tel:878-3853-9576">878-3853-9576</a></span>
                                </div>
                                <div class="phone">
                                    <span class="phone-label">Parts :</span>
                                    <span class="phone-number heading-font"><a
                                            href="tel:878-0505-0440">878-0505-0440</a></span>
                                </div>
                            </div>
                        </div>


                        <div class="pull-right">
                            <div class="header-main-phone heading-font">
                                <i class="stm-icon-phone"></i>
                                <div class="phone">
                                    <span class="phone-label">Sales :</span>
                                    <span class="phone-number heading-font"><a href="#"> (021) 111 128 128</a></span>
                                </div>
                            </div>
                        </div>


                        <div class="pull-right">
                            <div class="header-address">
                                <i class="stm-icon-pin"></i>
                                <div class="address">
                                    <span class="heading-font">St-4, Sector 17-D، National Hwy 5, Karachi, Karachi City, Sindh</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div id="header-nav-holder" class="hidden-sm hidden-xs">
        <div class="header-nav header-nav-transparent header-nav-fixed">
            <div class="container">
                <div class="header-help-bar-trigger">
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="header-help-bar">
                    <ul>
                        <li class="help-bar-live-chat">
                            <a id="chat-widget" title="Open Live Chat">
                                <span class="list-label heading-font">Live chat</span>
                                <i class="list-icon stm-icon-chat2"></i>
                            </a>
                        </li>
                        <li class="nav-search">
                            <a href="" data-toggle="modal" data-target="#searchModal"><i
                                    class="stm-icon-search"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu">
                    <ul class="header-menu clearfix">
                        
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-202">
                            <a href="{{ route('dashboard') }}" aria-current="page">Home</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-202">
                            <a href="{{ route('add-product') }}" aria-current="page">Add Product</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2107 stm_megamenu stm_megamenu__boxed">
                            <a href="{{ route('search') }}">Search Products</a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2109">
                                    <div class="menu-title heading-font">New/User Vehicles</div>
                                    <ul class="sub-menu">
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2110">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Toyota</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2111">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Honda</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2112">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Kia</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2113">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Suzuki</a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2114">
                                    <div class="menu-title heading-font">New/Used Mobiles</div>
                                    <ul class="sub-menu">
                                        
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2110">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Samsung</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2111">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Apple</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2112">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Xiaomi</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2113">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Huawei</a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2114">
                                    <div class="menu-title heading-font">New/Used Houses</div>
                                    <ul class="sub-menu">
                                        
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2110">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Karachi</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2111">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Lahore</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2112">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Islamabad</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2113">
                                            <a href="{{ route('search') }}"><i
                                                    class="stm_megaicon fa fa-arrow-circle-right"></i>Search by Rawalpindi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2119">
                                    <div class="menu-title heading-font">Contacts</div>
                                    <ul class='mm-list'>
                                        <li class='normal_font'><i class='stm-icon-ico_mag_map_pin'></i>
                                            St-4, Sector 17-D، National Hwy 5, Karachi, Karachi City, Sindh
                                        </li>
                                        <li class='normal_font'><i class='stm-icon-phone'></i> (021) 111 128 128</li>
                                        <li class='normal_font'><i class='stm-icon-ico_mag_clock'></i>Mon - Sat
                                            8.00 - 18.00</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="/" aria-current="page">About Us</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="/" aria-current="page">Shop</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="/" aria-current="page">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
