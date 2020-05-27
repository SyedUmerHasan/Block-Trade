@extends('webapp.layout.webapp')


@section('body')
    
<section class="b-pageHeader">
    <div class="container">
        <h1 class="wow zoomInLeft" data-wow-delay="0.5s">Submit Your Vehicle</h1>
        <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
            <h3>Add Your Vehicle In Our Listings</h3>
        </div>
    </div>
</section>
<!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
    <div class="container wow zoomInUp" data-wow-delay="0.5s">
        <a href="#" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="#" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
    </div>
</div>
<!--b-breadCumbs-->

<div class="b-infoBar">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="b-infoBar__progress wow zoomInUp" data-wow-delay="0.5s">
                    <div class="b-infoBar__progress-line clearfix">
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner"></div>
                            </div>
                        </div>
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner"></div>
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
                    <div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.5s">
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
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
                        <h3>Step 2</h3>
                        <div class="b-submit__aside-step-inner clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-list-ul"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>select details</h4>
                                <p>Choose vehicle specifications</p>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
                        <h3>Step 3</h3>
                        <div class="b-submit__aside-step-inner clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-photo"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>Photos &amp; videos</h4>
                                <p>Add images / videos of vehicle</p>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
                        <h3>Step 4</h3>
                        <div class="b-submit__aside-step-inner clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>Contact details</h4>
                                <p>Choose vehicle specifications</p>
                            </div>
                        </div>
                    </div>
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
                        <h3>Step 5</h3>
                        <div class="b-submit__aside-step-inner clearfix">
                            <div class="b-submit__aside-step-inner-icon">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="b-submit__aside-step-inner-info">
                                <h4>SUBMIT &amp; PUBLISH</h4>
                                <p>Add images / videos of vehicle</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                <div class="b-submit__main">
                    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                        <h2 class="">Add Your Vehicle Details</h2>
                    </header>
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
                    <form class="s-submit clearfix" action="{{ route('webapp.vehicledetail.add') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Enter vehicle brand <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="vehiclebrand_id">
                                            <option value="">Select</option>
                                            <option value="1" selected>Honda</option>
                                            <option value="2">Toyota</option>
                                            <option value="3">Suzuki</option>
                                            <option value="4">Kia</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Vehicle Manufacturer Year<span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="year_manufacture">
                                            <option value="">Select</option>
                                            @for ($i = 0; $i < 25; $i++)
                                            <option selected>{{ $i +1998 }}</option>
                                            @endfor
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>No. of Seats <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="number_seat">
                                            <option value="">Select</option>
                                            <option>2</option>
                                            <option selected>4</option>
                                            <option>6</option>
                                            <option>8</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select No. of Gears <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="number_gear">
                                            <option value="">Select</option>
                                            <option>5</option>
                                            <option selected>6</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select Drive Type <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="drive_type">
                                            <option value="">Select</option>
                                            <option selected>All Wheel Drive</option>
                                            <option>Front Wheel Drive</option>
                                            <option>Rear Wheel Drive</option>
                                            <option>4WD</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select No. of Cylinders <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="number_cylinder">
                                            <option>Select</option>
                                            <option selected>4</option>
                                            <option>6</option>
                                            <option>8</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select Fuel Type <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="fuel_type">
                                            <option value="">Select</option>
                                            <option selected>CNG</option>
                                            <option>Petrol</option>
                                            <option>Diesel</option>
                                            <option>Hybrid</option>
                                            <option>Electric</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Enter Vehicle Model <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="brandmodel_id">
                                            <option>Select a Model</option>
                                            <option value="1" selected>Civic</option>
                                            <option value="2">City</option>
                                            <option value="3">Corolla</option>
                                            <option value="4">Hummer</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select Body Type <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="body_type">
                                            <option>Select</option>
                                            <option selected>Sedan</option>
                                            <option>Hatchback</option>
                                            <option>MUV/SUV</option>
                                            <option>Coupe</option>
                                            <option>Convertible</option>
                                            <option>Wagon</option>
                                            <option>Van</option>
                                            <option>Van</option>
                                            <option>Van</option>
                                            <option>Van</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>No. of Doors <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="number_door">
                                                <option>Select</option>
                                                <option selected>2</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Vehicle Transmission Type <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="tranmission_type">
                                            <option>Select</option>
                                            <option selected>Automatic Transmission (AT)</option>
                                            <option>Manual Transmission (MT)</option>
                                            <option>Automated Manual Transmission (AM)</option>
                                            <option>Continuously Variable Transmission (CVT)</option>
                                            
                                            </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Select Engine Type <span>*</span></label>
                                    <div class='s-relative'>
                                        <select class="m-select" name="engine_type">
                                                <option>Select</option>
                                                <option>Manual</option>
                                                <option selected>Automatic </option>
                                                <option>Hybrid</option>
                                            </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Enter Engine Capacity <span>*</span></label>
                                    <input placeholder="Enter Capacity" type="text" name="engine_capacity" value="123456789"  />
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                    <label>Enter VIN/Chassis Number <span>*</span></label>
                                    <input placeholder="Enter Number" type="text" name="chasis_number"  value="123456789"/>
                                    <input type="text" name="users_id" value="0" style="display: none" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp; PROCEED to next step<span class="fa fa-angle-right"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--b-submit-->

<div class="m-home">
    <div class="b-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.5s">
                        <article class="b-info__aside-article">
                            <h3>OPENING HOURS</h3>
                            <div class="b-info__aside-article-item">
                                <h6>Sales Department</h6>
                                <p>Mon-Sat : 8:00am - 5:00pm<span>&middot;</span> Sunday is closed</p>
                            </div>
                            <div class="b-info__aside-article-item">
                                <h6>Service Department</h6>
                                <p>Mon-Sat : 8:00am - 5:00pm<span>&middot;</span> Sunday is closed</p>
                            </div>
                        </article>
                        <article class="b-info__aside-article">
                            <h3>About us</h3>
                            <p>Vestibulum varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl non ultricies lectus nibh mas lsa Duis scelerisque aliquet. Ante donec libero pede porttitor dacu msan esct venenatis quis.</p>
                        </article>
                    </aside>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="b-info__latest">
                        <h3 class=" wow zoomInUp" data-wow-delay="0.5s">LATEST AUTOS</h3>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-audi"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="#">MERCEDES-AMG GT S</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-audiSpyder"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="#">AUDI R8 SPYDER V-8</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-aston"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="#">ASTON MARTIN VANTAGE</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <address class="b-info__contacts wow zoomInUp" data-wow-delay="0.5s">
                            <p>contact us</p>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-map-marker"></span>
                                <em>202 W 7th St, Suite 233 Los Angeles,<br />
                                    California 90014 USA</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-phone"></span>
                                <em>Phone:  +92-336-2891707</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-fax"></span>
                                <em>FAX:  +92-336-2891707</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-envelope"></span>
                                <em>Email:  info@blocktrade.com</em>
                            </div>
                        </address>
                    <address class="b-info__map">
                            <a href="#">Open Location Map</a>
                        </address>
                </div>
            </div>
        </div>
    </div>
    <!--b-info-->
@endsection