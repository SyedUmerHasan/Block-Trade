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
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.3s">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit5.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
			</div>
		</div><!--b-breadCumbs-->

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
								<div class="b-infoBar__progress-line-step m-active">
									<div class="b-infoBar__progress-line-step-circle">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
									<div class="b-infoBar__progress-line-step-circle m-last">
										<div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

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
										<div class="b-submit__aside-step-inner-info-triangle"></div>                                    
									</div>
								</div>
							</div>
							<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.3s">
								<h3>Step 5</h3>
								<div class="b-submit__aside-step-inner m-active clearfix">
									<div class="b-submit__aside-step-inner-icon">
										<span class="fa fa-globe"></span>
									</div>
									<div class="b-submit__aside-step-inner-info">
										<h4>SUBMIT &amp; PUBLISH</h4>
										<p>Add images / videos of vehicle</p>
										<div class="b-submit__aside-step-inner-info-triangle"></div>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
						<div class="b-submit__main">
                            
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
							<form action="{{ route('webapp.vehicle.publish', $vehicleDetail->id) }}" method="post" class='s-submit'>
                                @csrf
                                <div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Publish you Car Advertisement</h2>
									</header>
									<div class="b-submit__main-element">
										<label>Enter Your AD Title <span>*</span></label>
										<div class="row m-smallPadding">
											<div class="col-sm-6 col-xs-12">
												<input type="text" name="car_title" required/>
											</div>
										</div>
									</div>

									<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
									<div class="b-submit__main-contacts-price">
										<div class="b-submit__main-contacts-price-plan">Your current plan: <span>FREE PLAN</span><a href="#">CHANGE</a></div>
									</div>
								</div>
								<div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Premium Listings <span class="b-submit__main-plan-money">( <span class="b-submit__main-plan-money-num">$11.50</span> <span class="b-submit__main-plan-money-note">Per Month</span> )</span></h2>
									</header>
									<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. </p>
									<div class="b-submit__main-contacts-check">
										<input type="radio" name="check2" id="check1" />
										<label class="s-submitCheckLabel" for="check1"><span class="m-circle"></span></label>
										<label class="s-submitCheck" for="check1">PAYPAL</label>
										<input type="radio" name="check2" id="check2" />
										<label class="s-submitCheckLabel" for="check2"><span class="m-circle"></span></label>
										<label class="s-submitCheck" for="check2">CREDIT CARD</label>
									</div>
									<div class="b-submit__main-element">
										<label>Enter Your Paypal ID <span>*</span></label>
										<div class="row m-smallPadding">
											<div class="col-sm-6 col-xs-12">
												<input type="text" name="id"/>
											</div>
											<div class="col-sm-6 col-xs-12">
												<a href="#" class="btn m-btn m-pay">PAY NOW &amp; UPGRADE<span class="fa fa-angle-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Free Listings</h2>
									</header>
									<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc.</p>
								</div>
								<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">PUBLISH MY LISTING NOW<span class="fa fa-angle-right"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-submit-->

@endsection

@section('script')

@endsection