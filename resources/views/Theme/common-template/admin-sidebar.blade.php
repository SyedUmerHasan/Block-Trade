

<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="http://127.0.0.1:8000/admin/home">

                <img class="hide-on-med-and-down" src="http://127.0.0.1:8000/admin.png" alt="materialize logo">
                <img class="show-on-medium-and-down hide-on-med-and-up" src="http://127.0.0.1:8000/admin.png" alt="materialize logo">
                <img class="show-on-medium-and-down hide-on-med-and-up" src="http://127.0.0.1:8000/admin.png" alt="materialize logo">
                <span class="logo-text hide-on-med-and-down">Admin Panel </span>

            </a>
            <a class="navbar-toggler" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">
        
        @if (!Auth::guest() && Auth::user()->role == "admin")
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('webapp.home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Visit Store</span>
            </a>
        </li>
        <li class="navigation-header">
            <a class="navigation-header-text">Profile </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehiclebrand.getall') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Car Brand List</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('interiorcolor.getall') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Interior Color List</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('exteriorcolor.getall') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Exterior Color List</span>
            </a>
        </li>
        
        <li class="navigation-header">
            <a class="navigation-header-text">Products </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehicle.getall') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Vehicle Ads List</span>
            </a>
        </li>

        
        <li class="navigation-header">
            <a class="navigation-header-text">Add Products </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehicle.details') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Create Car Ad</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehiclebrand.create') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Add Car Brand</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('interiorcolor.create') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Add Car Interior Color</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('exteriorcolor.create') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Add Car Exterior Color</span>
            </a>
        </li>
        
        @elseif (!Auth::guest() && Auth::user()->role == "buyer")
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('buyer.home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('webapp.home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Visit Store</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('changeAccountType') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Change Seller Account</span>
            </a>
        </li>

        @elseif (!Auth::guest() && Auth::user()->role == "seller")
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('seller.home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class="active bold">
            <a class="waves-effect waves-cyan " href="{{ route('webapp.home') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Visit Store</span>
            </a>
        </li>

        <li class="navigation-header">
            <a class="navigation-header-text">Products </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehicle.getall') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Vehicle Ads List</span>
            </a>
        </li>

        
        <li class="navigation-header">
            <a class="navigation-header-text">Add Products </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('vehicle.details') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Create Car Ad</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('changeAccountType') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Change Buyer Account</span>
            </a>
        </li>

        
        @endif
        <li class="navigation-header">
            <a class="navigation-header-text">Customer Support </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('support') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Customer Support</span>
            </a>
        </li>
        
        {{--Heading--}}

        
    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#">menu</i></a>

</aside>