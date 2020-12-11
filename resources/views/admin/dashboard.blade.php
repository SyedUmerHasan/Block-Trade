<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
          href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon"
          href="{{asset("admin-authentication")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/intro.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/charts-sparkline.css') }}">


</head>


<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    @include('Theme.common-template.admin-sidebar') 
    
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="{{ asset('/admin-assets/app-assets/images/icon/pdf-image.png') }}" width="24"
                                                 height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                                submitted</span>
                            <small class="grey-text">Marketing Manager</small>
                        </div>
                    </div>
                    <div class="status">
                        <small class="grey-text">17kb</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><imgsrc="{{ asset('/admin-assets/app-assets/images/icon/doc-image.png') }}"width="24"
                                                 height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                                Generator</span>
                            <small class="grey-text">FontEnd Developer</small>
                        </div>
                    </div>
                    <div class="status">
                        <small class="grey-text">550kb</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><imgsrc="{{ asset('/admin-assets/app-assets/images/icon/xls-image.png') }}"width="24"
                                                 height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                                Uploaded</span>
                            <small class="grey-text">Digital Marketing Manager</small>
                        </div>
                    </div>
                    <div class="status">
                        <small class="grey-text">20kb</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><imgsrc="{{ asset('/admin-assets/app-assets/images/icon/jpg-image.png') }}"width="24"
                                                 height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span>
                            <small class="grey-text">Web Designer</small>
                        </div>
                    </div>
                    <div class="status">
                        <small class="grey-text">37kb</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                                src="{{ asset('/admin-assets/app-assets/images/avatar/avatar-7.png') }}"width="30"
                                                 alt="sample image">
                        </div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span>
                            <small
                                    class="grey-text">UI designer
                            </small>
                        </div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                                src="{{ asset('/admin-assets/app-assets/images/avatar/avatar-8.png') }}"width="30"
                                                 alt="sample image">
                        </div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal
                                Clark</span>
                            <small class="grey-text">FontEnd Developer</small>
                        </div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                                src="{{ asset('/admin-assets/app-assets/images/avatar/avatar-10.png') }}"width="30"
                                                 alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena
                                Gibson</span>
                            <small class="grey-text">Digital Marketing</small>
                        </div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle"
                                                src="{{ asset('/admin-assets/app-assets/images/avatar/avatar-12.png') }}"width="30"
                                                 alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span>
                            <small class="grey-text">Web Designer</small>
                        </div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
                        class="material-icons">error_outline</span><span
                        class="member-info">No results found.</span></a>
        </li>
    </ul>

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row vertical-modern-dashboard">
                            <div class="col s12 m6 l3 card-width">
                              <div class="card border-radius-6">
                                <div class="card-content center-align">
                                  <i class="material-icons amber-text small-ico-bg mb-5">check</i>
                                  <h4 class="m-0"><b>{{ $buyerCount }}</b></h4>
                                  <p>Total Buyer Accounts</p>
                                  {{--  <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                                    119.71%</p>  --}}
                                </div>
                              </div>
                            </div>
                            <div class="col s12 m6 l3 card-width">
                              <div class="card border-radius-6">
                                <div class="card-content center-align">
                                  <i class="material-icons amber-text small-ico-bg mb-5">sentiment_satisfied</i>
                                  <h4 class="m-0"><b>{{ $sellerCount }}</b></h4>
                                  <p>Total Seller Accounts</p>
                                  {{--  <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                                    112.90%</p>  --}}
                                </div>
                              </div>
                            </div>
                            <div class="col s12 m6 l3 card-width">
                              <div class="card border-radius-6">
                                <div class="card-content center-align">
                                  <i class="material-icons amber-text small-ico-bg mb-5">radio_button_unchecked</i>
                                  <h4 class="m-0"><b>{{ $adminCount }}</b></h4>
                                  <p>Total Admin Account</p>
                                  {{--  <p class="red-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_down</i>
                                    24.4%</p>  --}}
                                </div>
                              </div>
                            </div>
                            <div class="col s12 m6 l3 card-width">
                              <div class="card border-radius-6">
                                <div class="card-content center-align">
                                  <i class="material-icons amber-text small-ico-bg mb-5">favorite_border</i>
                                  <h4 class="m-0"><b>{{ 0 }}</b></h4>
                                  <p>Total Registered Cars</p>
                                  {{--  <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                                    112.43%</p>  --}}
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="row">

                            <div class="col s12 m12 12">
                                <div class="card subscriber-list-card animate fadeRight">
                                    <div class="card-content pb-1">
                                        <h4 class="card-title mb-0">All Admin Accounts <i
                                                    class="material-icons float-right">more_vert</i></h4>
                                    </div>
                                    <table class="subscription-table responsive-table highlight">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Experience</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $item)
                                            <tr>
                                                <td>{{ $item->user_name }}</td>
                                                <td><a href="tel:{{ $item->mobile_number }}">{{ $item->mobile_number }}</a></td>
                                                <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                                                <td class="center-align">{{ $item->experience }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('Theme.common-template.admin-rightside-bar')


                    {{--  Intro Modal  --}}
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


    @include('Theme.common-template.admin-footer')

    </body>

    <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/vendors/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/js/scripts/dashboard-modern.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/intro.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/charts-sparklines.js') }}"></script>

</html>