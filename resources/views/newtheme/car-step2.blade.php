@extends('newtheme.template')

@section('main')


    <div id="main">
        <div class="entry-header left small_title_box" style="">
            <div class="container">
                <div class="entry-title">
                    <h2 class="h1" style="">
                        Sell a car </h2>
                </div>
            </div>
        </div>

        <!-- Breads -->
        <div class="stm_breadcrumbs_unit heading-font ">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 6.6.0 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                            title="Go to Motors." href="https://motors.stylemixthemes.com" class="home external"
                            rel="nofollow"><span property="name">Motors</span></a>
                        <meta property="position" content="1">
                    </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"
                            class="post post-page current-item">Sell a car</span>
                        <meta property="url" content="https://motors.stylemixthemes.com/sell-a-car/">
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="vc_row wpb_row vc_row-fluid vc_custom_1451023875067">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner vc_custom_1450948810755">
                        <div class="wpb_wrapper">
                            <h2 style="line-height: 35px;text-align: left"
                                class="vc_custom_heading vc_custom_1451024280177">SELL YOUR VEHICLE</h2>
                            <div class="colored-separator vc_custom_1450949033819 text-left style_1">
                                <div class="first-long stm-base-background-color"></div>
                                <div class="last-short stm-base-background-color"></div>
                            </div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><span style="color: #888888; font-size: 13px; line-height: 24px;">Interested in
                                            trading in your current vehicle? It would probably be good to have an estimate
                                            of what it’s worth first. After all, trading in a vehicle is a lot less hassle
                                            than selling it yourself. And you can often lower your payments by trading in a
                                            vehicle as well. Win-win!</span></p>
                                    <p><span style="color: #888888; font-size: 13px; line-height: 24px;">We’re here to help
                                            you make an informed decision. Fill out the simple form below, and we’ll send
                                            you an estimated appraisal within 48 hours. From there, it’s up to you what you
                                            want to do!</span></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-9">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <!-- Load image on load preventing lags-->

                            <div class="stm-sell-a-car-form">
                                <div class="form-navigation">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <a href="#step-one" class="form-navigation-unit active" data-tab="step-one">
                                                <div class="number heading-font">1.</div>
                                                <div class="title heading-font">Car Information</div>
                                                <div class="sub-title">Add your vehicle details</div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <a href="#step-two" class="form-navigation-unit" data-tab="step-two">
                                                <div class="number heading-font">2.</div>
                                                <div class="title heading-font">Vehicle Condition</div>
                                                <div class="sub-title">Add your vehicle details</div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <a href="#step-three" class="form-navigation-unit" data-tab="step-three">
                                                <div class="number heading-font">3.</div>
                                                <div class="title heading-font">Contact details</div>
                                                <div class="sub-title">Your contact details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-content" id="form-select">

                                    <!-- STEP ONE -->
                                    <form action="{{ route('car.detail.add') }}" method="POST" enctype="multipart/form-data" action="#error-fields" > 
                                        @csrf
                                        <div class="form-content-unit active" id="step-one">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">AD Title</div>
                                                        <input type="text" value="" name="car_title" required="" placeholder="For eg Toyota Corolla 1.8 Grande CVT-i Cruisetronic 2019">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Description</div>
<textarea name="description" style="width:100%;height: auto" rows="6" placeholder="For Eg : Toyota Corolla 1.8 Grande CVT-i Cruisetronic 2019 is up for sale. The car’s total specifications and physical condition is mentioned and described below in the following points: 
• Automatic gear transmission
• Total Genuine
• Push Start
• Climate Control A/C
• Retractable Side Mirrors
• Roof / Sunroof
• Interior, exterior is good
• Leather Seats
• Tyres condition is good
• 92910 KM driven up till now
• Registered City: Karachi"></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div>
                                                        <div class="contact-us-label">Make</div>
                                                        <select name="make" class="select2 select2-container select2-container--default"  required="">
                                                            <option value="" selected='selected'> Make </option>
                                                            @foreach (\App\CarManufacturer::all() as $item)
                                                                <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Model</div>
                                                        <select name="model" class="select2 select2-container select2-container--default"  required="">
                                                            <option value="" selected='selected'> Model </option>
                                                            @foreach (\App\CarModel::all() as $item)
                                                                <option value="{{ $item->id }}">{{ $item->model_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Condition</div>
                                                        <select name="condition" class="select2 select2-container select2-container--default"  required="">
                                                            <option value="" selected='selected'> Condition </option>
                                                            <option value="New"> New </option>
                                                            <option value="Used"> Used </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Body Type</div>
                                                        <select name="body_type" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Body</option>
                                                            <option value="limousine">Compact </option>
                                                            <option value="convertible">Convertible</option>
                                                            <option value="coupe">Coupe </option>
                                                            <option value="off-road">Off-Road </option>
                                                            <option value="pickup"> Pickup </option>
                                                            <option value="sedan">Sedan </option>
                                                            <option value="suv">SUV </option>
                                                            <option value="other"> Other </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Transmission</div>
                                                        <select name="transmission" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Transmission</option>
                                                            <option value="Automatic">Automatic </option>
                                                            <option value="Manual">Manual</option>
                                                            <option value="SemiAutomatic">SemiAutomatic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Drive Type</div>
                                                        <select name="drivetype" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Drive Type</option>
                                                            <option value="4WD">Four Wheel Drive </option>
                                                            <option value="FWD">Front Wheel Drive</option>
                                                            <option value="RWD"> Rear Wheel Drive </option>
                                                            <option value="AWD"> All Wheel Drive </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Fuel Type</div>
                                                        <select name="fueltype" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Fuel Type</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="Petrol">Petrol</option>
                                                            <option value="Diesel">Diesel </option>
                                                            <option value="Electric">Electric </option>
                                                            <option value="Hybrid">Hybrid</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Year Manufacture</div>
                                                        <select name="yearmanufacturer" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Year Manufacture</option>
                                                            @for ($i = 0; $i < 20; $i++)
                                                            <option value="{{ 2020-$i }}">{{ 2020-$i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <div class="contact-us-label">Exterior Color</div>
                                                        <select name="exteriorcolor" class="select2 select2-container select2-container--default"  required="">                                                                   
                                                            <option value="" selected='selected'>Exterior Color</option>
                                                            @foreach (\App\ExteriorColor::all() as $item)
                                                                <option value="{{ $item->color_name }}">{{ $item->color_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Mileage (in KMs)</div>
                                                                <input type="text" value="" name="mileage" required="" placeholder="For eg 2000Km">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Chasis Number</div>
                                                                <input type="text" value="" name="chasis_number" required="" placeholder="For eg 123456789">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <div class="contact-us-label">Engine Capacity</div>
                                                                <input type="text" value="" name="engine_capacity" required="" placeholder="For eg 1800CC">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">

                                                    <div>
                                                        <h5 class="stm-label-type-2">Upload your Product Images</h5>
                                                        <div class="upload-photos">
                                                            <div class="stm-pseudo-file-input">
                                                                <div class="stm-filename">Choose file...</div>
                                                                <div class="stm-plus"></div>
                                                                <input class="stm-file-realfield"  type="file" name="vehicle_images[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="https://motors.stylemixthemes.com/wp-content/themes/pearl-child/assets/images/radio.png"
                                                        style="opacity:0;width:0;height:0;">

                                                </div>
                                            </div>

                                            <button type="submit" class="button sell-a-car-proceed">Save and continue </a>
                                        </div>    
                                    </form>

                                    <!-- STEP TWO -->
                                    <form action="{{ route('car.contact.add', $id) }}" action="#error-fields" > 
                                        <div class="form-content-unit" id="step-two">
                                            <div class="contact-details">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">First name*</div>
                                                            <input type="text" value="" name="first_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Last name*</div>
                                                            <input type="text" value="" name="last_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Email Address*</div>
                                                            <input type="text" value="" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Phone number*</div>
                                                            <input type="text" value="" name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Comments</div>
                                                            <textarea name="comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="button sell-a-car-proceed">Save</a>
                                        </div>
                                    </form>


                                    <!-- STEP THREE -->
                                    <form action="#" action="#error-fields" > 
                                        <div class="form-content-unit" id="step-three">
                                            <div class="contact-details">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">First name*</div>
                                                            <input type="text" value="" name="first_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Last name*</div>
                                                            <input type="text" value="" name="last_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Email Address*</div>
                                                            <input type="text" value="" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Phone number*</div>
                                                            <input type="text" value="" name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="contact-us-label">Comments</div>
                                                            <textarea name="comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <script></script>
                                                    <div>
                                                        <div class="grecaptcha-badge" data-style="bottomright"
                                                            style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                            <div class="grecaptcha-logo"><iframe
                                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc2l-EZAAAAAAhDQEPtkgBvAv8rBDGJe9E5YNkh&amp;co=aHR0cHM6Ly9tb3RvcnMuc3R5bGVtaXh0aGVtZXMuY29tOjQ0Mw..&amp;hl=en&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;size=invisible&amp;cb=2xf1tidz429d"
                                                                    width="256" height="60" role="presentation"
                                                                    name="a-ymhhba6sp1mv" frameborder="0" scrolling="no"
                                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe>
                                                            </div>
                                                            <div class="grecaptcha-error"></div><textarea
                                                                id="g-recaptcha-response" name="g-recaptcha-response"
                                                                class="g-recaptcha-response"
                                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div>
                                                    </div><input class="g-recaptcha"
                                                        data-sitekey="6Lc2l-EZAAAAAAhDQEPtkgBvAv8rBDGJe9E5YNkh"
                                                        data-callback="onSubmit" type="submit" value="Save and finish">
                                                </div>
                                                <div class="disclaimer">
                                                    By submitting this form, you will be requesting trade-in value at no
                                                    obligation and
                                                    will be contacted within 48 hours by a sales representative. </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <script></script>
                        </div>
                    </div>
                </div>
            </div>


            <div class="clearfix">
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


@endsection


@section('script')   

<link media="all" href="/wp-content/cache/autoptimize/1/css/autoptimize_1a91a15fba9e280e53bb69d5b19f91cc.css"
<link rel='stylesheet' id='right_popup-css' href='https://stylemixthemes.com/api/right-popup/popup.css?ver=5.3'
type='text/css' media='all' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    
function stm_validateFirstStep() {
    var errorFields = {
        firstStep: {},
        secondStep: {},
        thirdStep: {}
    };
    errorFields.firstStep = {};
    var $ = jQuery;
    $('#step-one input[type="text"]').each(function() {
        var required = $(this).data('need');
        if (typeof required !== 'undefined') {
            if ($(this).attr('name') != 'video_url') {
                if ($(this).val() == '') {
                    $(this).addClass('form-error');
                    errorFields.firstStep[$(this).attr('name')] = $(this).closest('.form-group').find('.contact-us-label').text();
                } else {
                    $(this).removeClass('form-error');
                }
            }
        }
    });
    var errorsLength = Object.keys(errorFields.firstStep).length;
    if (errorsLength == 0) {
        $('a[href="#step-one"]').addClass('validated');
    } else {
        $('a[href="#step-one"]').removeClass('validated');
    }
}
(function($) {
    "use strict";

    $(document).ready(function() {
        $('.form-navigation-unit').on('click', function(e){
            e.preventDefault();
            stm_validateFirstStep();
            if(!$(this).hasClass('active')) {
                $('.form-navigation-unit').removeClass('active');
                $(this).addClass('active');

                var tab = $(this).data('tab');

                $('.form-content-unit').slideUp();

                $('#'+tab).slideDown();
            }
        })

        var i = 1;

        $('.stm-plus').on('click', function(e){
            e.preventDefault();
            if(i < 5) {
                i++;
                $('.upload-photos').append('<div class="stm-pseudo-file-input generated"><div class="stm-filename">Choose file...</div><div class="stm-plus"></div><input class="stm-file-realfield" type="file" name="gallery_images_' + i + '"/></div>');
            }
        })

        $('body').on('click', '.generated .stm-plus', function(){
            i--;
            $(this).closest('.stm-pseudo-file-input').remove();
        })

        if(document.location.hash){
            // form-select
            var carForm = document.querySelectorAll(".stm-sell-a-car-form a.form-navigation-unit");
            carForm.forEach(function(eachForm){
                eachForm.classList.remove("active");
                if(eachForm.getAttribute("data-tab") && eachForm.getAttribute("data-tab") == document.location.hash.replace("#","") ){
                    eachForm.classList.add("active");
                }
                console.log("🚀 ~ file: addcars.blade.php ~ line 540 ~ carForm.map ~ eachForm", eachForm);
            });
            var carForm2 = document.querySelectorAll("#form-select .form-content-unit");
            carForm2.forEach(function(eachForm){
                console.log("🚀 ~ file: addcars.blade.php ~ line 552 ~ carForm2.forEach ~ eachForm", eachForm)
                eachForm.style.overflow = "hidden";
                eachForm.style.display = "none";
                eachForm.classList.remove("active");
                if(eachForm.id == document.location.hash.replace("#","") ){
                    eachForm.classList.add("active");
                    eachForm.style.overflow = "hidden";
                    eachForm.style.display = "block";
                    console.log("RUN => ", eachForm)
                }
            });
            //form-select
        }
    });

})(jQuery);

</script>
<script src="/wp-content/cache/autoptimize/1/js/autoptimize_9b561ac9d53efc1cb1edbb3babd46754.js"></script>
@endsection