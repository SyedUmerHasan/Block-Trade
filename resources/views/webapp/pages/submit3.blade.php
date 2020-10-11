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
        <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="submit3.html" class="b-breadCumbs__page m-active">Submit a Vehicle</a>
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
                        <div class="b-infoBar__progress-line-step">
                            <div class="b-infoBar__progress-line-step-circle">
                                <div class="b-infoBar__progress-line-step-circle-inner m-active"></div>
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
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
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

                    <form action="{{ route('webapp.vehicleimage.add', $vehicleDetail->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $vehicleDetail->id }}" name="vehicledetail_id" />
                        <div class="s-form">
                            <div class="b-submit__main-file">
                                <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.3s">
                                    <h2>Upload Your Vehicle Photos</h2>
                                </header>
                                <p class=" wow zoomInUp" data-wow-delay="0.3s">You can upload upto 10 photos of your vehicle here.</p>
                                <div>

                                    @foreach ($vehicleimages as $item)
                                    <span style="height: 150px; margin: 8px">
                                        <img src="{{ $item->image_path }}" alt="" style="height: 150px; margin: 4px ">
                                    </span>
                                    @endforeach
                                    
                                </div>

                                <label class="b-submit__main-file-label btn m-btn wow zoomInUp" data-wow-delay="0.3s">
                                        <input type="file" class="" name="vehicle_images[]"  multiple />
                                        <span>CHOOSE A  PHOTO</span>
                                        <span class="fa fa-angle-right"></span>
                                    </label>
                                <label>Max. file size: 3.5 MB. Allowed images: jpg, gif, png.</label>
                            </div>
                            <div class="b-submit__main-file wow zoomInUp" data-wow-delay="0.3s">
                                <header class="s-headerSubmit s-lineDownLeft">
                                    <h2>Write Some Additional Description About Your Vehicle</h2>
                                </header>
                                <textarea name="comments"style="text-transform: none !important;"
                                
                                placeholder="Describe Your car: 
Example: Alloy rim, first owner, genuine parts, maintained by authorized workshop, excellent mileage, original paint etc."></textarea>
                            </div>
                        </div>
                        <div class="s-submit">
                            <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">Save &amp; PROCEED to next step<span class="fa fa-angle-right"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection