@extends('newtheme.template')

@section('main')


    <div id="main">
        <div class="entry-header left small_title_box" style="">
            <div class="container">
                <div class="entry-title">
                    <h2 class="h1" style=""> {{ $vehicledetail->car_title }} </h2>
                </div>
            </div>
        </div>

        <!-- Breads -->
        <div class="stm_breadcrumbs_unit heading-font ">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 6.6.0 -->
                    <span property="itemListElement" typeof="ListItem"><a><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span> &gt; 
                    <span property="itemListElement" typeof="ListItem"><a><span property="name">Product</span></a>
                        <meta property="position" content="1">
                    </span> &gt; 
                    <span property="itemListElement" typeof="ListItem"><a><span property="name">{{ $vehicledetail->car_title }}</span></a>
                        <meta property="position" content="1">
                    </span> 
                </div>
            </div>
        </div>

        <div class="stm-single-car-page" style="background-position: 0px 83.3333px;">


            <div class="container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="stm-vc-single-car-content-left wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h1 class="title h2">{{ $vehicledetail->car_title }} </h1>

                                <div class="stm-car-carousels">

                                    <!--New badge with videos-->
                                    <div class="special-label h5">
                                        Special </div>
                                    <div class="stm-big-car-gallery owl-carousel owl-theme owl-loaded">

                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 2394px;">

                                                @foreach (\App\VehicleImages::where("vehicledetail_id", "=", $vehicledetail->id)->get() as $item)
                                                <div class="owl-item @if ($loop->first) active @endif" style="width: 798px; margin-right: 0px; @if (!$loop->first) display:none; @endif">
                                                    <div class="stm-single-image" data-id="big-image-2424">
                                                        <a href="{{ $item->image_path }}"
                                                            class="stm_fancybox external" rel="stm-car-gallery nofollow">
                                                            <img width="798" height="466"
                                                                src="{{ $item->image_path }}"
                                                                class="img-responsive wp-post-image" alt="" loading="lazy"
                                                                srcset="{{ $item->image_path }} 798w, {{ $item->image_path }} 825w, {{ $item->image_path }} 350w, {{ $item->image_path }} 700w, {{ $item->image_path }} 240w, {{ $item->image_path }} 280w"
                                                                sizes="(max-width: 798px) 100vw, 798px"> </a>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="owl-controls" style="display: none;">
                                            <div class="owl-nav">
                                                <div class="owl-prev" style="display: none;">prev</div>
                                                <div class="owl-next" style="display: none;">next</div>
                                            </div>
                                            <div class="owl-dots" style="display: none;"></div>
                                        </div>
                                    </div>

                                    <div class="stm-thumbs-car-gallery owl-carousel owl-theme owl-loaded"
                                        style="margin-top: 22px;">








                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 492px;">
                                                
                                                @foreach (\App\VehicleImages::where("vehicledetail_id", "=", $vehicledetail->id)->get() as $item)
                                                <div class="owl-item active current"
                                                    style="width: 142px; margin-right: 22px;">
                                                    <div class="stm-single-image" id="big-image-2424">
                                                        <img width="350" height="205"
                                                            src="{{ $item->image_path }}"
                                                            class="img-responsive wp-post-image" alt="" loading="lazy"
                                                            srcset="{{ $item->image_path }} 350w">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="owl-controls" style="display: none;">
                                            <div class="owl-nav">
                                                <div class="owl-prev" style=""></div>
                                                <div class="owl-next" style=""></div>
                                            </div>
                                            <div class="owl-dots" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>


                                <!--Enable carousel-->
                                <script></script>
                                <div class="wpb_tabs wpb_content_element" data-interval="0">
                                    <div
                                        class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs stm_tabs_style_1  vc_clearfix ui-widget ui-widget-content ui-corner-all">
                                        <ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                            role="tablist">
                                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active"
                                                role="tab" tabindex="0" aria-controls="tab-1446536320841-4-6"
                                                aria-labelledby="ui-id-5" aria-selected="true" aria-expanded="true"><a
                                                    class="ui-tabs-anchor" role="presentation" tabindex="-1"
                                                    id="ui-id-5">Product Details</a></li>
                                        </ul>
                                        <div class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix ui-widget-content ui-corner-bottom"
                                            aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true"
                                            style="display: block;">

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                    
                                                        {{ $vehicledetail->description }}

                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stm-vc-single-car-sidebar-right wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">

                                <div class="single-car-prices">
                                    <div class="single-regular-price text-center">

                                        <span class="h3"> {{ $vehicledetail->price }} &nbsp;PKR  </span>
                                    </div>
                                </div>





                                <div class="single-car-prices" id="buyProduct">
                                    <div class="single-regular-price text-center ">

                                        <span class="h3"> Buy </span>
                                    </div>
                                </div>




                                <div class="stm-car_dealer-buttons heading-font">

                                    <a href="tel:{{ \App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->phone_number }}"> 
                                        {{ \App\VehicleContact::where("vehicledetail_id","=", $vehicledetail->id)->first()->phone_number }} <i class="stm-moto-icon-trade"></i>
                                    </a>

                                </div>


                                <div class="single-car-data">

                                    <table>

                                        <tbody>
                                            @if (isset(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->first_name))
                                            <tr>
                                                <td class="t-label">Owners First Name</td>
                                                <td class="t-value h6">{{ strtoupper(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->first_name) }}</td>
                                            </tr>
                                            @endif
                                            @if (isset(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->last_name))
                                            <tr>
                                                <td class="t-label">Owners Last Name</td>
                                                <td class="t-value h6">{{ strtoupper(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->last_name) }}</td>
                                            </tr>
                                            @endif
                                            @if (isset(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->email_address))
                                            <tr>
                                                <td class="t-label">Contact Email</td>
                                                <td class="t-value h6">{{ strtoupper(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->email_address) }}</td>
                                            </tr>
                                            @endif
                                            @if (isset(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->city))
                                            <tr>
                                                <td class="t-label">Owners City</td>
                                                <td class="t-value h6">{{ strtoupper(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->city) }}</td>
                                            </tr>
                                            @endif
                                            @if (isset(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->address))
                                            <tr>
                                                <td class="t-label">Owners Address</td>
                                                <td class="t-value h6">{{ strtoupper(\App\VehicleContact::where('vehicledetail_id','=', $vehicledetail->id)->first()->address) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->body_type))
                                            <tr>
                                                <td class="t-label">Body</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->body_type) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->carmanufacturer_id))
                                            <tr>
                                                <td class="t-label">Brand Name</td>
                                                <td class="t-value h6">{{ strtoupper( \App\CarManufacturer::where('id','=', $vehicledetail->carmanufacturer_id)->first()->brand_name) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->carmodel_id))
                                            <tr>
                                                <td class="t-label">Model</td>
                                                <td class="t-value h6">{{ strtoupper( \App\CarModel::where('id','=', $vehicledetail->carmodel_id)->first()->model_name) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->drive_type))
                                            <tr>
                                                <td class="t-label">Drive Type</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->drive_type) }}</td>
                                            </tr>
                                            @endif

                                            <tr>
                                                <td class="t-label">Mileage</td>
                                                <td class="t-value h6">3</td>
                                            </tr>

                                            @if (isset($vehicledetail->fuel_type))
                                            <tr>
                                                <td class="t-label">Fuel type</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->fuel_type) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->engine_capacity))
                                            <tr>
                                                <td class="t-label">Engine</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->engine_capacity) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->year_manufacture))
                                            <tr>
                                                <td class="t-label">Year</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->year_manufacture) }}</td>
                                            </tr>
                                            @endif

                                            @if (isset($vehicledetail->tranmission_type))
                                            <tr>
                                                <td class="t-label">Transmission</td>
                                                <td class="t-value h6">{{ strtoupper($vehicledetail->tranmission_type) }}</td>
                                            </tr>
                                            @endif
                                            
                                            @if (isset($vehicledetail->chasis_number))
                                            <tr>
                                                <td class="t-label">Blocktrade Registation #</td>
                                                <td class="t-value h6" id="blockId">{{ strtoupper($vehicledetail->chasis_number) }}</td>
                                            </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                </div>
            </div>
            <!--cont-->
        </div>
        <!--single car page-->

    </div>

@endsection


@section('script')

    <link media="all" href="/wp-content/cache/autoptimize/1/css/autoptimize_1a91a15fba9e280e53bb69d5b19f91cc.css" <link
        rel='stylesheet' id='right_popup-css' href='https://stylemixthemes.com/api/right-popup/popup.css?ver=5.3'
        type='text/css' media='all' />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="/wp-content/cache/autoptimize/1/js/autoptimize_9b561ac9d53efc1cb1edbb3babd46754.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.0/web3.min.js" integrity="sha512-ppuvbiAokEJLjOUQ24YmpP7tTaLRgzliuldPRZ01ul6MhRC+B8LzcVkXmUsDee7ne9chUfApa9/pWrIZ3rwTFQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    
    <script>
        
        var Marketplace = {};
        var networkId;
        var account;
        var products = [];
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
                for (var i = 1; i <= productCount; i++) {
                    const product = await marketplace.methods.Assets(i).call()
                    products = [...products, product]
                }
                console.log("productCount", productCount)
            } else {
                window.alert('Marketplace contract not detected in the current Network')
            }

            $("#buyProduct").click(async (event)=>{
                console.log("Ia m called")
                debugger;
                var { value: userName } =  await inputUsername();
                var { value: cnicNumber } =  await inputCNIC();
                var blockId = $('#blockId').text();
                var filterProduct =  products.filter((eachProduct) =>{
                    return eachProduct.id == blockId
                })
                if(!filterProduct){
                    Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                    )
                }
                else{
                    buyProduct(blockId, userName, cnicNumber, '15')
                }

            });
        });
        async function inputUsername(){
            return await Swal.fire({
                title: 'Enter your Full Name as per your CNIC.',
                input: 'text',
                inputLabel: 'Enter your Full Name',
                showCancelButton: true,
                inputValidator: (value) => {
                  if (!value) {
                    return 'You need to write something!'
                  }
                }
              })
        }
        async function inputCNIC(){
            return await Swal.fire({
                title: 'Enter your CNIC Number.',
                input: 'text',
                inputLabel: 'Enter your CNIC Number',
                showCancelButton: true,
                inputValidator: (value) => {
                  if (!value) {
                    return 'You need to write something!'
                  }
                }
              })
        }
        async function buyProduct(productID, username, cnic, price){
            var networkId = await web3.eth.net.getId();
            const networkData = Marketplace.networks[networkId];
            const marketplace = new web3.eth.Contract(Marketplace.abi, networkData.address);
            const accounts = await web3.eth.getAccounts()
            account = accounts[0]
            marketplace.methods.purchaseAsset(productID, username,cnic)
                .send({ from: account ,sender: account, value: web3.utils.toWei(price, 'Ether') })
                .once('receipt', (receipt) => {
                    console.log("createProduct -> receipt", receipt)
                    return (receipt)
                })
        }
    </script>
@endsection
