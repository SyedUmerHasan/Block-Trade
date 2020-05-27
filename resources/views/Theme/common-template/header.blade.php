<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav
            class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">

                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down"><a
                            class="waves-effect waves-block waves-light toggle-fullscreen"
                            href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only search-input-wrapper"><a
                            class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button"
                            href="javascript:void(0);" data-target="notifications-dropdown"><i
                                class="material-icons">notifications_none<small
                                    class="notification-badge">5</small></i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                            data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                    src="/admin-assets/app-assets/images/avatar/avatar-7.png"
                                    alt="avatar"><i></i></span></a></li>

                </ul>
                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new
                            order has been
                            placed!</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle red small">stars</span>
                            Completed the task</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle teal small">settings</span>
                            Settings updated</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle deep-orange small">today</span> Director
                            meeting started</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days
                            ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span
                                class="material-icons icon-bg-circle amber small">trending_up</span> Generate
                            monthly report</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week
                            ago</time>
                    </li>
                </ul>
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="{{ route('profile.view', Auth::user()->id) }}"><i
                                class="material-icons">person_outline</i> Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="#"><i
                                class="material-icons">chat_bubble_outline</i> Chat</a></li>
                    <li><a class="grey-text text-darken-1" href="#"><i
                                class="material-icons">help_outline</i>
                            Help</a></li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-1" href="#"href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons">lock_outline</i> 
                        {{ __('Logout') }}
                        </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>