<html>
    <head>

        <meta http-equiv="Content-Type" content="; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
              content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
        <meta name="keywords"
              content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
        <meta name="author" content="ThemeSelect">
        <title>Dashboard Modern | Materialize - Material Design Admin Template</title>
        <link rel="apple-touch-icon" href="/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png">
        <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/app-assets/images/favicon/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/pages/app-sidebar.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/pages/page-users.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/custom/custom.css">
    </head>
    
    <body
            class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   "
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>User profile</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('portal')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">User profile</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- users view start -->
                    <div class="section users-view">
                        <!-- users view media object start -->
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="display-flex media">
                                        <a href="#" class="avatar">
                                                <img src="{{ Auth::user()->image_url != '' ? Auth::user()->image_url:  '/admin-assets/app-assets/images/avatar/avatar-7.png'  }}"
                                                     alt="users view avatar" class="z-depth-4 circle"
                                                     height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading">
                                                <span class="users-view-name"> {{$profile->first_name}} {{$profile->last_name}}  </span>
                                                <span class="grey-text">@</span>
                                                <span class="users-view-username grey-text">  {{$profile->user_name}}</span>
                                            </h6>
                                            <span>ID:</span>
                                            <span class="users-view-id">{{$profile->id}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
                                    @if (Auth::user()->role =="admin")
                                    {{--  <a href="#" class="btn-small pink">Enrolled Courses</a>  --}}
                                    @endif
                                    @if (Auth::user()->role =="admin")
                                    <a href="#" class="btn-small btn-light-indigo"><i class="material-icons">mail_outline</i></a>
                                    @endif
                                    @if (Auth::user()->role =="admin" || Auth::user()->id == $profile->id )
                                            <a href="{{ route('profile.edit', $profile->id) }}" class="btn-small indigo">Edit</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- users view media object ends -->
                        <!-- users view card data start -->
                        @if (Auth::user()->role =="admin")
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m12">
                                        
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
                                        <h4 class="flow-text">
                                            For Admin only
                                        </h4>

                                        <div class="row indigo lighten-5 border-radius-4 mb-2">
                                            <div class="col s12 m4 users-view-timeline">
                                              <h6 class="indigo-text m-0">Emails Sent: <span>0</span></h6>
                                            </div>
                                            <div class="col s12 m4 users-view-timeline">
                                              <h6 class="indigo-text m-0">Messages Sent: <span>0</span></h6>
                                            </div>
                                          </div>
                                        <table class="striped">
                                            <tbody>
                                            <tr>
                                                <td>Registered:</td>
                                                <td>{{ $profile->created_at->format('d M Y - H:i') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Latest Activity:</td>
                                                <td class="users-view-latest-activity">{{ $profile->updated_at->format('d M Y - H:i') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Verified:</td>
                                                @if ( $profile->email_verified_at !== null )
                                                    <td><span class=" users-view-status chip green lighten-5 green-text">Verified</span></td>
                                                @else
                                                    <td><span class=" users-view-status chip red lighten-5 red-text">Not Verified</span></td>
                                                @endif

                                            </tr>
                                            <tr>
                                                <td>Role:</td>
                                                <td class="users-view-role"> {{  $profile->role }} </td>
                                            </tr>
                                            <tr>
                                                <td>Status:</td>
                                                @if ($profile->is_active  == true || $profile->is_active  == "true" )
                                                    <td><span class=" users-view-status chip green lighten-5 green-text">Active</span></td>
                                                @else
                                                    <td><span class=" users-view-status chip red lighten-5 red-text">Deactive</span></td>
                                                @endif

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- users view card data ends -->

                        <!-- users view card details start -->
                        <div class="card">
                            <div class="card-content">

                                <div class="row">

                                    <div class="col s12">
                                        <span class="users-view-name">
                                            <h4 class="flow-text">
                                                User Details
                                            </h4>
                                        </span>
                                        <table class="striped">
                                            <tbody>
                                            <tr>
                                                <td>Username:</td>
                                                <td class="users-view-username">
                                                    {{ $profile->user_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>First Name:</td>
                                                <td class="users-view-name">
                                                    {{ $profile->first_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Last Name:</td>
                                                <td class="users-view-name">
                                                    {{ $profile->last_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="users-view-email">
                                                    {{ $profile->email }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Company/Organization:</td>
                                                <td>
                                                    {{ $profile->working }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Description:</td>
                                                <td>
                                                    {{ $profile->description }}
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <h6 class="mb-2 mt-2"><i class="material-icons">link</i> Social Links</h6>
                                        <table class="striped">
                                            <tbody>
                                                <tr>
                                                    <td>Facebook:</td>
                                                    @if ($profile->facebook  == '' )
                                                        <td><a href="#">https://www.facebook.com/</a></td>
                                                    @else
                                                        <td><a href="{{$profile->facebook}}">{{$profile->facebook}}</a></td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Linked In:</td>
                                                    @if ($profile->linkedin  == '' )
                                                        <td><a href="#">https://www.linkedin.com/</a></td>
                                                    @else
                                                        <td><a href="{{$profile->linkedin}}">{{$profile->linkedin}}</a></td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Twitter:</td>
                                                    @if ($profile->twitter  == '' )
                                                        <td><a href="#">https://www.twitter.com/</a></td>
                                                    @else
                                                        <td><a href="{{$profile->twitter}}">{{$profile->twitter}}</a></td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h6 class="mb-2 mt-2"><i class="material-icons">error_outline</i> Personal Info
                                        </h6>
                                        <table class="striped">
                                            <tbody>
                                            <tr>
                                                <td>Country:</td>
                                                <td>Pakistan</td>
                                            </tr>
                                            <tr>
                                                <td>Languages:</td>
                                                <td>English</td>
                                            </tr>
                                            <tr>
                                                <td>Contact:</td>
                                                <td>
                                                    {{ $profile->mobile_number }}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- users view card details ends -->

                    </div>
                    <!-- users view ends --><!-- START RIGHT SIDEBAR NAV -->
                    
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


    @include('Theme.common-template.admin-footer')

    </body>
    
    <script src="/admin-assets/app-assets/js/vendors.min.js"></script>

    <script src="/admin-assets/app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="/admin-assets/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>

    <script src="/admin-assets/app-assets/js/plugins.js"></script>
    <script src="/admin-assets/app-assets/js/search.js"></script>
    <script src="/admin-assets/app-assets/js/custom/custom-script.js"></script>
    <script src="/admin-assets/app-assets/js/scripts/customizer.js"></script>

    <script src="/admin-assets/app-assets/js/scripts/app-contacts.js"></script>

    <script src="/admin-assets/app-assets/js/scripts/page-users.js"></script>


</html>



