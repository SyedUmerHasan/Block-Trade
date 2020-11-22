<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="b-topBar__addr">
                    <span class="fa fa-map-marker"></span> FAST National University, Karachi.
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="b-topBar__tel">
                    <span class="fa fa-phone"></span> +92-336-2891707
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <nav class="b-topBar__nav">
                    <ul>
                        @guest
                        <li><a href="javascript:void(0);">Cart</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('loginpage') }}">Sign in</a></li>
                        @endguest
                        @auth
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a></li>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li><a href="javascript:void(0);">Cart</a></li>
                        <li><a href="{{ route('profile.view',Auth::user()->id) }}">Welcome {{ Auth::user()->first_name }}</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--b-topBar-->

<nav class="b-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-4">
                <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                    <h3><a href="{{ route('portal') }}">Block<span>Trade</span></a></h3>
                    <h2><a href="{{ route('portal') }}">AUTOMOBILE CLASSFIED ADS</a></h2>
                </div>
            </div>
            <div class="col-sm-9 col-xs-8">
                <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-main-slide" id="nav">
                        <ul class="navbar-nav-menu">
                            <li class="dropdown">
                                <a  href="{{ route('portal') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Search By Manufacturers<span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu  h-nav">
                                    @foreach (\App\VehicleDetail::orderBy('vehiclebrand_id')->groupBy('vehiclebrand_id')->take(10)->get() as $item)
                                    <li><a href="{{ route('searchportal', ['brand' => \App\CarManufacturer::find($item->vehiclebrand_id)->brand_name ]) }}">{{ \App\CarManufacturer::find($item->vehiclebrand_id)->brand_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Search By Car Models<span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu  h-nav">
                                    @foreach (\App\VehicleDetail::orderBy('brandmodel_id')->groupBy('brandmodel_id')->take(10)->get() as $item)
                                    <li><a href="{{ route('searchportal', ['model' => \App\BrandModel::find($item->brandmodel_id)->model_name ]) }}">{{ \App\BrandModel::where("id", "=", $item->brandmodel_id)->first()->model_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a  href="{{ route('webapp.submit1') }}">Create Ad</a>
                            </li>
                            {{-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="javascript:void(0);">Grid <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-nav">
                                    <li><a href="listings.html">listing 1</a></li>
                                    <li><a href="listingsTwo.html">listing 2</a></li>
                                    <li><a href="listTable.html">listing 3</a></li>
                                    <li><a href="listTableTwo.html">listing 4</a></li>
                                </ul>
                            </li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="article.html">Services</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="javascript:void(0);">Blog <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-nav">
                                    <li><a href="blog.html">Blog 1</a></li>
                                    <li><a href="blogTwo.html">Blog 2</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                </ul>
                            </li>
                            <li><a href="submit1.html">Shop</a></li>
                            <li><a href="contacts.html">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>