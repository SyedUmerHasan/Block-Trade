@extends('webapp.layout.webapp')

@section('content')


    <body
            class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   "
            data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="{{ asset('admin-assets/app-assets/images/icon/pdf-image.png')}}" width="24"
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
                        <div class="avatar"><img src="{{ asset('admin-assets/app-assets/images/icon/doc-image.png')}}" width="24"
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
                        <div class="avatar"><img src="{{ asset('admin-assets/app-assets/images/icon/xls-image.png')}}" width="24"
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
                        <div class="avatar"><img src="{{ asset('admin-assets/app-assets/images/icon/jpg-image.png')}}" width="24"
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
                                                 src="{{ asset('admin-assets/app-assets/images/avatar/avatar-7.png')}}" width="30"
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
                                                 src="{{ asset('admin-assets/app-assets/images/avatar/avatar-8.png')}}" width="30"
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
                                                 src="{{ asset('admin-assets/app-assets/images/avatar/avatar-10.png')}}" width="30"
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
                                                 src="{{ asset('admin-assets/app-assets/images/avatar/avatar-12.png')}}" width="30"
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


    @include('Theme.common-template.admin-sidebar')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row vertical-modern-dashboard">
                            <div class="col s12 m6 l3">
                                <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Total Users</h4>
                                            </div>
                                            <div class="col s12 display-flex">
                                                <div id="sales-bar-1"></div>
                                                <p class="mt-4 pink-text accent-2"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                    9504</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title truncate">Total Buyers</h4>
                                            </div>
                                            <div class="col s12 display-flex">
                                                <div id="sales-bar-2"></div>
                                                <p class="mt-4 blue-text"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                    1896</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Total Revenue</h4>
                                            </div>
                                            <div class="col s12 display-flex light-green-text">
                                                <div id="sales-bar-3"></div>
                                                <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                    8546</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Total Cars</h4>
                                            </div>
                                            <div class="col s12 display-flex amber-text accent-2">
                                                <div id="sales-bar-4"></div>
                                                <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_downward</i>
                                                    15%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col s12 m12 12">
                                <div class="card subscriber-list-card animate fadeRight">
                                    <div class="card-content pb-1">
                                        <h4 class="card-title mb-0">Subscriber List <i
                                                    class="material-icons float-right">more_vert</i></h4>
                                    </div>
                                    <table class="subscription-table responsive-table highlight">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Michael Austin</td>
                                            <td>ABC Fintech LTD.</td>
                                            <td>Jan 1,2019</td>
                                            <td><span
                                                        class="badge pink lighten-5 pink-text text-accent-2">Close</span>
                                            </td>
                                            <td>$ 1000.00</td>
                                            <td class="center-align"><a href="#"><i
                                                            class="material-icons pink-text">clear</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Aldin Rakić</td>
                                            <td>ACME Pvt LTD.</td>
                                            <td>Jan 10,2019</td>
                                            <td><span
                                                        class="badge green lighten-5 green-text text-accent-4">Open</span>
                                            </td>
                                            <td>$ 3000.00</td>
                                            <td class="center-align"><a href="#"><i
                                                            class="material-icons pink-text">clear</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>İris Yılmaz</td>
                                            <td>Collboy Tech LTD.</td>
                                            <td>Jan 12,2019</td>
                                            <td><span
                                                        class="badge green lighten-5 green-text text-accent-4">Open</span>
                                            </td>
                                            <td>$ 2000.00</td>
                                            <td class="center-align"><a href="#"><i
                                                            class="material-icons pink-text">clear</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Lidia Livescu</td>
                                            <td>My Fintech LTD.</td>
                                            <td>Jan 14,2019</td>
                                            <td><span
                                                        class="badge pink lighten-5 pink-text text-accent-2">Close</span>
                                            </td>
                                            <td>$ 1100.00</td>
                                            <td class="center-align"><a href="#"><i
                                                            class="material-icons pink-text">clear</i></a></td>
                                        </tr>
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

@endsection

@section('head')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Modern | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="{{ asset('admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin-assets/app-assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/dashboard-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/intro.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/charts-sparkline.css')}}">



@endsection


@section('scripts')


    <script src="{{ asset('admin-assets/app-assets/js/vendors.min.js') }}"></script>

    <script src="{{ asset('admin-assets/app-assets/vendors/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') }}"></script>

    <script src="{{ asset('admin-assets/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/js/scripts/customizer.js') }}"></script>

    <script src="{{ asset('admin-assets/app-assets/js/scripts/dashboard-modern.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/js/scripts/intro.js') }}"></script>

    <script src="{{ asset('admin-assets/app-assets/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin-assets/app-assets/js/scripts/charts-sparklines.js') }}"></script>

@endsection