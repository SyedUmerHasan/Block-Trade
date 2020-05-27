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
                        <li><a href="#">Cart</a></li>
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
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Welcome {{ Auth::user()->first_name }}</a></li>
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
                    <h3><a href="{{ route('webapp.home') }}">Block<span>Trade</span></a></h3>
                    <h2><a href="{{ route('webapp.home') }}">AUTOMOBILE CLASSFIED ADS</a></h2>
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
                                <a  href="{{ route('webapp.home') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a  href="#">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a  href="#">Contact Us</a>
                            </li>
                            <li class="dropdown">
                                <a  href="#">Car List</a>
                            </li>
                            <li class="dropdown">
                                <a  href="{{ route('webapp.submit1') }}">Create Ad</a>
                            </li>
                            {{-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="#">Grid <span class="fa fa-caret-down"></span></a>
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
                                <a class="dropdown-toggle" data-toggle='dropdown' href="#">Blog <span class="fa fa-caret-down"></span></a>
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