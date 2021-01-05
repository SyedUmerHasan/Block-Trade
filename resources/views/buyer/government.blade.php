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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Government Identity</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('blockchain.government') }}">Government Identity</a>
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
                                        <h4 class="card-title">Government Identity</h4>
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
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <select name="ownerName" id="ownerName" class="form-control">
                                                                    <option value="">Select First Product Creator</option>
                                                                    @foreach (\App\CarManufacturer::all() as $item)
                                                                        <option value="{{ $item->brand_name }}">{{ $item->brand_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="text" class="form-control" id="cnicNumber" name="cnicNumber" aria-describedby="helpId" value="42101-15516-152">
                                                                <label for="cnicNumber" class="">Enter CNIC Number</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" class="form-control datepicker" id="creationYear" name="creationYear" aria-describedby="helpId">
                                                                <label for="creationYear" class="">Enter Manufacturer Date</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <select name="productName" id="productName" class="form-control">
                                                                    <option value="">Select Product</option>
                                                                    @foreach (\App\CarModel::all() as $item)
                                                                        <option value="{{ $item->model_name }}">{{ $item->model_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" aria-describedby="helpId">
                                                                <label for="registrationNumber" class="">Enter Product Registartion Number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="number" class="form-control" id="price" name="price" aria-describedby="helpId">
                                                                <label for="price" class="">Enter price (in ETH)</label>
                                                            </div>
                                                        </div>
                                                        <div class=" right">
                                                            <button class="btn blue " id="addProducts">Submit</button>
                                                            <button class="btn red">Cancel</button>
                                                        </div>
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
                    
                    var options = {
                        defaultDate: new Date(),
                        setDefaultDate: true
                    };
                    var elems = document.querySelector('#creationYear');
                    var instance = M.Datepicker.init(elems, options);
                    var regNumElement = document.getElementById("registrationNumber");
                    regNumElement.value = getRandomInt(99999999)
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
                            products = [...products, product]
                        }
                        $('.table').DataTable({
                            data: products,
                            columns: [
                                { title: "Reg Number" },
                                { title: "Product Detail" },
                                { title: "Owner Name" },
                                { title: "Price" },
                                { title: "CNIC Number" }
                            ]
                        });
        
        
                    } else {
                        window.alert('Marketplace contract not detected in the current Network')
                    }
                });
        
                $("#addProducts").click(async (event)=>{
                    var networkId = await web3.eth.net.getId();
                    const networkData = Marketplace.networks[networkId];
                    const marketplace = new web3.eth.Contract(Marketplace.abi, networkData.address);
                    const ownerName = $("#ownerName").val();
                    const cnicNumber = $("#cnicNumber").val();
                    const creationYear = $("#creationYear").val();
                    const productName = $("#productName").val();
                    const registrationNumber = $("#registrationNumber").val();
                    const price = $("#price").val();
        
                    const accounts = await web3.eth.getAccounts()
                    account = accounts[0]
                    const weiprice = window.web3.utils.toWei(price, 'Ether')
                    marketplace.methods.createAsset(ownerName,productName, cnicNumber,creationYear,registrationNumber,weiprice)
                        .send({ from: account })
                        .once('receipt', (receipt) => {
                            console.log("createProduct -> receipt", receipt)
                            alert("Product created successfully")
                        });
                });
                function getRandomInt(max) {
                    return Math.floor(Math.random() * Math.floor(max));
                }
            </script>
</body>
</html>