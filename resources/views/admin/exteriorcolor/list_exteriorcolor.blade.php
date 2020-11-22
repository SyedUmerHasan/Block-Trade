<!DOCTYPE html>
<html class="loading" data-textdirection="ltr">
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

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.4/css/responsive.dataTables.min.css">

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
    
    <div id="main">
        <div class="row">
          <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
          <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Exterior Color</span></h5>
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('portal') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('exteriorcolor.getall') }}">Exterior Color</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="container">
              <div class="section section-data-tables">
    <div class="row">
      <div class="col s12 m12 l12">
        <div id="button-trigger" class="card card card-default scrollspy">
          <div class="card-content">
            <h4 class="card-title">Exterior Color List</h4>
            <div class="row">
              <div class="col s12">
                <table id="table_id" class="display responsive nowrap" style="width:100%">

                    <thead>
                        <tr>
                            <th>Exterior Color Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($exteriorcolor as $item)
                      <tr>
                        <td>{{ $item->color_name }}</td>
                        <td>
                          <a href="{{ route('exteriorcolor.edit',$item->id) }}" class="btn cyan">
                            Edit
                          </a>
                          {{--  <a href="#" class="btn green">
                            Edit
                          </a>  --}}
                          <a href="#" class="btn red">
                            Delete
                          </a>
                        </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                </table>
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
  
    @include('Theme.common-template.admin-footer')

    </body>

    {{-- <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script> --}}

    <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>

    <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
    <script src="//cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js" defer></script>
    <script>
        $(document).ready(function() { 
            $('#table_id').DataTable( {
                "responsive": true 
            });
        });
    </script>
    </html>