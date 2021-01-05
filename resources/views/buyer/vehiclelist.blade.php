<!DOCTYPE html>
<html class="loading" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
        href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("admin-authentication")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.4/css/responsive.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin-assets/app-assets/vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/intro.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/charts-sparkline.css') }}">


</head>


<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Car List</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('blockchain') }}">Car List</a>
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
                                        <h4 class="card-title">Car List</h4>
                                        <div class="row">
                                            <div class="col s12">

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

                                                <div class="row">
                                                    <div class="col s12">
                                                        <table class="table">
                                                        </table>
                                                    </div>
                                                </div>


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

            <script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>
            <script src="{{ asset('/admin-assets/app-assets/js/scripts/customizer.js') }}"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.0/web3.min.js" integrity="sha512-ppuvbiAokEJLjOUQ24YmpP7tTaLRgzliuldPRZ01ul6MhRC+B8LzcVkXmUsDee7ne9chUfApa9/pWrIZ3rwTFQ==" crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        
            <script>
                var Marketplace = {};
                var networkId;
                var account;
                window.addEventListener('load', async () => {
                    // Wait for loading completion to avoid race conditions with web3 injection timing.
                    if (window.ethereum) {
                        window.web3 = new Web3(window.ethereum)
                        await window.ethereum.enable()
                    } else if (window.web3) {
                        window.web3 = new Web3(window.web3.currentProvider)
                    } else {
                        window.alert("Non-Ethereum browser detected.")
                    }
                    const web3 = window.web3
                    const accounts = await web3.eth.getAccounts()
                    account = accounts[0]
                    networkId = await web3.eth.net.getId()
                    let url = 'http://127.0.0.1:8000/abis/Marketplace.json';
                    let response = await fetch(url);
                    Marketplace = await response.json(); // read response body and parse as JSON

                    const networkData = Marketplace.networks[networkId]
                    if (networkData) {
                        const marketplace = new web3.eth.Contract(Marketplace.abi, networkData.address)
                        const productCount = await marketplace.methods.AssetCount().call()
                        var products = [];
                        console.log("productCount", productCount)
                        for (var i = 1; i <= productCount; i++) {
                            const product = await marketplace.methods.Assets(i).call()
                            product.price = await product.price/1000000000000000000;
                            products = [...products, product]
                        }
                        $('.table').DataTable({
                            data: products,
                            columns: [
                                { title: "BlockTrade #" },
                                { title: "Product Name" },
                                { title: "Owner Name" },
                                { 
                                    "title": "Price (in ETH)", 
                                    "data": function ( row, type, val, meta ) {
                                        return row.price;
                                    } 
                                },
                                { title: "CNIC Number" },
                                { title: "Manufacture Date" },
                                { title: "Registration No"},
                                {
                                    title: "Account Number", 
                                    "data": function ( row, type, val, meta ) {
                                        var address =  row.ownerAddress;
                                        var newaddress = "0x***" + address.substring(address.length-5, address.length);
                                        return newaddress;
                                    }  
                                },
                                { title: "On Sale?" }
                            ]
                        });
        
        
                    } else {
                        window.alert('Marketplace contract not detected in the current Network')
                    }
                });
            </script>
</body>
</html>