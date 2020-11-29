@extends('webapp.layout.webapp')

{{-- <input type="hidden" value="{{ $vehicleDetail->id }}}" name="vehicledetail_id" /> --}}

@section('body')
 

<section class="b-pageHeader">
    <div class="container">
        <h1 class="wow zoomInLeft" data-wow-delay="0.3s">Submit Your Vehicle</h1>
        <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.3s">
            <h3>Add Your Vehicle In Our Listings</h3>
        </div>
    </div>
</section>
<!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
    <div class="container wow zoomInUp" data-wow-delay="0.3s">
        <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit4.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
    </div>
</div>
<!--b-breadCumbs-->

<div class="b-infoBar">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="b-infoBar__progress wow zoomInUp" data-wow-delay="0.3s">
                    <div class="b-infoBar__progress-line clearfix">
                        <div class="b-infoBar__progress-line-step m-active">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step m-active">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step m-active">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
                            </div>
                            <div class="b-infoBar__progress-line-step-circle m-last">
                                <div class="b-infoBar__progress-line-step-circle-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--b-infoBar-->

<div class="b-submit">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                <aside class="b-submit__aside">
                    <div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
                        <h3>Step 1</h3>
                        <div class="b-submit__aside-step-inner m-active clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-car"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>Add YOUR Vehicle</h4>
                                <p>Select your vehicle &amp; add info</p>
                                <div class="b-submit__aside-step-inner-info-triangle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
                        <h3>Step 2</h3>
                        <div class="b-submit__aside-step-inner m-active clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-list-ul"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>select details</h4>
                                <p>Choose vehicle specifications</p>
                                <div class="b-submit__aside-step-inner-info-triangle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
                        <h3>Step 3</h3>
                        <div class="b-submit__aside-step-inner m-active clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-photo"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>Photos &amp; videos</h4>
                                <p>Add images / videos of vehicle</p>
                                <div class="b-submit__aside-step-inner-info-triangle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
                        <h3>Step 4</h3>
                        <div class="b-submit__aside-step-inner m-active clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>Contact details</h4>
                                <p>Choose vehicle specifications</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                <div class="b-submit__main">
                    <form action="{{ route('webapp.vehiclecontact.add', $vehicleDetail->id) }}" method="post" class='s-submit'>
                        @csrf
                        
                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <input type="hidden" value="{{ $vehicleDetail->id }}" name="vehicledetail_id" />
                        <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                                <header class="s-headerSubmit s-lineDownLeft">
                                    <h2>Publish you Car Advertisement</h2>
                                </header>
                                <div class="b-submit__main-element">
                                    <label>Enter Your AD Title <span>*</span></label>
                                    <div class="row m-smallPadding">
                                        <div class="col-sm-12 col-xs-12">
                                            <input type="text" name="car_title" required=""  value="{{ old('car_title') }}">
                                        </div>
                                    </div>
                                </div>
                            <div class="b-submit__main-contacts-price">
                                <div class="row m-smallPadding">
                                    <div class="col-lg-4 col-xs-12">
                                        <h6>Enter Your Expected Price</h6>
                                    </div>
                                    <div class="col-lg-8 col-xs-12">
                                        <div class="b-submit__main-contacts-price-input">
                                            <span class="fa fa-car"></span>
                                            <input type='text' name="price" value="{{ old('price') }}"/>
                                            <span class="b-submit__main-contacts-price-input-usd">
                                                    IN USD $
                                                </span>
                                        </div>
                                        <div class="b-submit__main-contacts-price-note">
                                            Price Guide Estimation: $25,000 - $35,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Enter Mileage <span>*</span></label>
                                        <div class="b-submit__main-contacts-inputSelect">
                                            <input type="text" name="mileage" value="{{ old('mileage') }}" />
                                            <div class="b-submit__main-contacts-select">
                                                <select name="mileage" class="m-select"  >
                                                    <option>10000</option>
                                                    <option>40000</option>
                                                    <option>60000</option>
                                                    <option>100000</option>
                                                </select>
                                                <span class="fa fa-caret-down"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Select Exterior Color <span>*</span></label>
                                        <div class="s-relative">
                                            <select class="m-select" name="exterior_color"  >
                                                <option value="">Select</option>
                                            @foreach ($exteriorcolor as $item)
                                                <option value="{{ $item->id }}" {{ ($item->id == old('exterior_color') ? "selected" : '') }}>{{ $item->color_name }}</option>
                                            @endforeach

                                            </select>
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                            <header class="s-headerSubmit s-lineDownLeft">
                                <h2>Vehicle Registration Details</h2>
                            </header>
                            <div class="b-submit__main-contacts-check">
                                <span>Is your Vehicle registered?</span>
                                <input type="radio" name="registered" id="registered" value="true"   />
                                <label class="s-submitCheckLabel" for="registered"><span class="fa fa-check"></span></label>
                                <label class="s-submitCheck" for="registered">Yes</label>
                                <input type="radio" name="registered" id="registered" value="false" />
                                <label class="s-submitCheckLabel" for="registered"><span class="fa fa-check"></span></label>
                                <label class="s-submitCheck" for="registered">No</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Enter Registerarion Plate Number  <span>*</span></label>
                                        <input type="text" name="registration_plate_number" value="{{ old('registration_plate_number') }}"/>
                                    </div>
                                    <div class="b-submit__main-element">
                                        <label>Select Registerarion Expiry Month  <span>*</span></label>
                                        <div class="s-relative">
                                            <select class="m-select" name="registration_exiry_month">
                                                <option value="">Select</option>
                                                <option>January</option>
                                                <option>Feburary</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Enter Vehicle Registerarion Number <span>*</span></label>
                                        <input type="text" name="registration_vehicle_number" value="{{ old('registration_vehicle_number') }}"/>
                                    </div>
                                    <div class="b-submit__main-element">
                                        <label>Select Registerarion Expiry Year <span>*</span></label>
                                        <div class="s-relative">
                                            <select class="m-select" name="registration_exiry_year" >
                                                    <option value="">Select</option>
                                                    @for ($i = 25; $i > 0; $i--)
                                                        <option > {{ 2021 - $i }}</option>
                                                    @endfor
                                                </select>
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                            <header class="s-headerSubmit s-lineDownLeft">
                                <h2>Tell Us How Buyers Contact You</h2>
                            </header>
                            <div class="b-submit__main-element">
                                <label>Vehicle Current Address <span>*</span></label>
                                <input type="text" name="vehicle_address" value="{{ old('vehicle_address') }}" />
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>City / State  <span>*</span></label>
                                        <input type="text" name="vehicle_city" value="{{ old('vehicle_city') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Zip Code / Country <span>*</span></label>
                                        <input type="text" name="vehicle_country"value="{{ old('vehicle_country') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Enter Your Phone Number  <span>*</span></label>
                                        <input type="text" name="vehicle_phone" value="{{ old('vehicle_phone') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="b-submit__main-element">
                                        <label>Enter Your Email Address  <span>*</span></label>
                                        <input type="text" name="vehicle_email" value="{{ old('vehicle_email') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">Save &amp; PROCEED to next step<span class="fa fa-angle-right"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection