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
                                <h6><a href="detail.html">MERCEDES-AMG GT S</a></h6>
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
                                <h6><a href="detail.html">AUDI R8 SPYDER V-8</a></h6>
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
                                <h6><a href="detail.html">ASTON MARTIN VANTAGE</a></h6>
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
                            <a href="contacts.html">Open Location Map</a>
                        </address>
                </div>
            </div>
        </div>
    </div>
    <!--b-info-->

    <footer class="b-footer">
        <a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="b-footer__company wow zoomInLeft" data-wow-delay="0.5s">
                        <div class="b-nav__logo">
                            <h3><a href="home.html">Auto<span>Club</span></a></h3>
                        </div>
                        <p>&copy; 2015 Designed by Templines &amp; Powered by WordPress.</p>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="b-footer__content wow zoomInRight" data-wow-delay="0.5s">
                        <div class="b-footer__content-social">
                            <a href="#"><span class="fa fa-facebook-square"></span></a>
                            <a href="#"><span class="fa fa-twitter-square"></span></a>
                            <a href="#"><span class="fa fa-google-plus-square"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube-square"></span></a>
                            <a href="#"><span class="fa fa-skype"></span></a>
                        </div>
                        <nav class="b-footer__content-nav">
                            <ul>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="404.html">Pages</a></li>
                                <li><a href="listings.html">Inventory</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="404.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="listTable.html">Shop</a></li>
                                <li><a href="contacts.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--b-footer-->
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