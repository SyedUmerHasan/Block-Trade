@extends('webapp.layout.webapp')


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
        <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit2.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
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
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.3s">
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
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.3s">
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
                    <div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.3s">
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
                    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.3s">
                        <h2 class="">Select Additional Features Of Your Vehicle</h2>
                    </header>
                    <div id="vehicledetail"></div>
                    <p class=" wow zoomInUp" data-wow-delay="0.3s">Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <form class="s-submit clearfix" action="{{ route('webapp.vehiclefeature.add',$vehicleDetail->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{ $vehicleDetail->id }}" name="vehicledetail_id" />

                            <div class="col-md-6 col-xs-12">
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="abs"  class="checkbox-value"   id="abs"  />
                                    <label class="s-submitCheckLabel" for="abs"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="abs">Abs</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="alloywheels"  class="checkbox-value" id="alloywheels"   />
                                    <label class="s-submitCheckLabel" for="alloywheels"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="alloywheels">Alloy Wheels</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="passengerairbag"  class="checkbox-value" id="passengerairbag"  />
                                    <label class="s-submitCheckLabel" for="passengerairbag"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="passengerairbag">Passenger Airbag</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="heateddoormirrors"  class="checkbox-value" id="heateddoormirrors"  />
                                    <label class="s-submitCheckLabel" for="heateddoormirrors"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="heateddoormirrors">Heated Door Mirrors</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="airconditioning"  class="checkbox-value"  id="airconditioning"   />
                                    <label class="s-submitCheckLabel" for="airconditioning"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="airconditioning">Air Conditioning</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="tripcomputer"  class="checkbox-value"  id="tripcomputer"   />
                                    <label class="s-submitCheckLabel" for="tripcomputer"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="tripcomputer">Trip Computer</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="sideairbags"  class="checkbox-value"  id="sideairbags"   />
                                    <label class="s-submitCheckLabel" for="sideairbags"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="sideairbags">Side Airbags</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="audioremotecontrol"  class="checkbox-value"  id="audioremotecontrol"   />
                                    <label class="s-submitCheckLabel" for="audioremotecontrol"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="audioremotecontrol">Audio Remote Control</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="foldingrearseats"  class="checkbox-value"  id="foldingrearseats"   />
                                    <label class="s-submitCheckLabel" for="foldingrearseats"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="foldingrearseats">Folding Rear Seats</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="centrallocking"  class="checkbox-value"  id="centrallocking"   />
                                    <label class="s-submitCheckLabel" for="centrallocking"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="centrallocking">Central Locking - Keyless</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="weathershields"  class="checkbox-value"  id="weathershields"   />
                                    <label class="s-submitCheckLabel" for="weathershields"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="weathershields">Weather Shields</label>
                                </div>
                                <div class="b-submit__main-element m-border wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="electricfrontseats"  class="checkbox-value"  id="electricfrontseats"   />
                                    <label class="s-submitCheckLabel" for="electricfrontseats"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="electricfrontseats">Electric Front Seats</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="engineimmobiliser"  class="checkbox-value"  id="engineimmobiliser"   />
                                    <label class="s-submitCheckLabel" for="engineimmobiliser"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="engineimmobiliser">Engine Immobiliser</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="foglamps"  class="checkbox-value"  id="foglamps"   />
                                    <label class="s-submitCheckLabel" for="foglamps"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="foglamps">Fog Lamps</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="gpssatellite"  class="checkbox-value"  id="gpssatellite"   />
                                    <label class="s-submitCheckLabel" for="gpssatellite"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="gpssatellite">GPS Satellite Navigation </label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="headlightcovers"  class="checkbox-value"  id="headlightcovers"   />
                                    <label class="s-submitCheckLabel" for="headlightcovers"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="headlightcovers">Headlight Covers</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="leatherseats"  class="checkbox-value"  id="leatherseats"   />
                                    <label class="s-submitCheckLabel" for="leatherseats"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="leatherseats">Leather Seats</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="leathertrim"  class="checkbox-value"  id="leathertrim"   />
                                    <label class="s-submitCheckLabel" for="leathertrim"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="leathertrim">Leather Trim</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="dualfuel"  class="checkbox-value"  id="dualfuel"   />
                                    <label class="s-submitCheckLabel" for="dualfuel"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="dualfuel">LPG (Dual Fuel)</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="roofdeflector"  class="checkbox-value"  id="roofdeflector"   />
                                    <label class="s-submitCheckLabel" for="roofdeflector"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="roofdeflector">Roof Deflector</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="rearspoiler"  class="checkbox-value"  id="rearspoiler"   />
                                    <label class="s-submitCheckLabel" for="rearspoiler"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="rearspoiler">Rear Spoiler</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="tintedwindows"  class="checkbox-value"  id="tintedwindows"   />
                                    <label class="s-submitCheckLabel" for="tintedwindows"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="tintedwindows">Tinted Windows</label>
                                </div>
                                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
                                    <input type="checkbox" value="false" name="towbar"  class="checkbox-value"  id="towbar"   />
                                    <label class="s-submitCheckLabel" for="towbar"><span class="fa fa-check"></span></label>
                                    <label class="s-submitCheck" for="towbar">Tow Bar</label>
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
    <script>
        $(".checkbox-value").on('change', function() {
            if ($(this).is(':checked')) {
              $(this).attr('value', 'true');
            } else {
              $(this).attr('value', 'false');
            }
          });
          $('#vehicledetail').val(window.location.pathname.split("/").pop())
    </script>
@endsection