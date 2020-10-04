@extends('webapp.layout.webapp')


@section('body')


<section class="b-pageHeader">
    <div class="container">
        <h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
        <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
            <h3>Your search returned 28 results</h3>
        </div>
    </div>
</section>
<!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
    <div class="container wow zoomInUp" data-wow-delay="0.5s">
        <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listingsTwo.html" class="b-breadCumbs__page m-active">Search Results</a>
    </div>
</div>

<div class="b-infoBar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>RECENTLY VIEWED<span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="detail.html">Item</a></li>
                            <li><a href="detail.html">Item</a></li>
                            <li><a href="detail.html">Item</a></li>
                            <li><a href="detail.html">Item</a></li>
                        </ul>
                    </div>
                    <a href="compare.html" class="b-infoBar__compare-item"><span class="fa fa-compress"></span>COMPARE VEHICLES: 2</a>
                </div>
            </div>
            <div class="col-lg-8 col-xs-12">
                <div class="b-infoBar__select wow zoomInUp" data-wow-delay="0.5s">
                    <form method="post" action="/">
                        <div class="b-infoBar__select-one">
                            <span class="b-infoBar__select-one-title">SELECT VIEW</span>
                            <a href="listings.html" class="m-list m-active"><span class="fa fa-list"></span></a>
                            <a href="listTableTwo.html" class="m-table"><span class="fa fa-table"></span></a>
                        </div>
                        <div class="b-infoBar__select-one">
                            <span class="b-infoBar__select-one-title">SHOW ON PAGE</span>
                            <select name="select1" class="m-select">
                                <option value="" selected="">10 items</option>
                            </select>
                            <span class="fa fa-caret-down"></span>
                        </div>
                        <div class="b-infoBar__select-one">
                            <span class="b-infoBar__select-one-title">SORT BY</span>
                            <select name="select2" class="m-select">
                                <option value="" selected="">Last Added</option>
                            </select>
                            <span class="fa fa-caret-down"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="b-items">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <aside class="b-items__aside">
                    <h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">REFINE YOUR SEARCH</h2>
                    <div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="b-items__aside-main-body">
                                <div class="b-items__aside-main-body-item">
                                    <label>SELECT A MAKE</label>
                                    <div>
                                        <select name="select1" class="m-select">
                                            <option value="" selected="">Any Make</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>SELECT A MODEL</label>
                                    <div>
                                        <select name="select1" class="m-select">
                                            <option value="" selected="">Any Make</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>PRICE RANGE</label>
                                    <div class="slider"></div>
                                    <input type="hidden" name="min" value="100k" class="j-min" />
                                    <input type="hidden" name="max" value="500k" class="j-max" />
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>VEHICLE TYPE</label>
                                    <div>
                                        <select name="select1" class="m-select">
                                            <option value="" selected="">Any Type</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>VEHICLE STATUS</label>
                                    <div>
                                        <select name="select1" class="m-select">
                                            <option value="" selected="">Any Status</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>FUEL TYPE</label>
                                    <div>
                                        <select name="select1" class="m-select">
                                            <option value="" selected="">All Fuel Types</option>
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                            </div>
                            <footer class="b-items__aside-main-footer">
                                <button type="submit" class="btn m-btn">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />
                                <a href="">RESET ALL FILTERS</a>
                            </footer>
                        </form>
                    </div>
                    <div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
                        <div class="b-items__aside-sell-img">
                            <h3>SELL YOUR CAR</h3>
                        </div>
                        <div class="b-items__aside-sell-info">
                            <p>
                                Nam tellus enimds eleifend dignis lsim biben edum tristique sed metus fusce Maecenas lobortis.
                            </p>
                            <a href="submit1.html" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12">
                <div class="b-items__cars">
                    @foreach ($vehicleDetail->items() as $item)
                    <div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomInUp;">
                        <div class="b-items__cars-one-img">
                            <img src="{{ $item->images[0]->image_path }}" alt="{{ $item->car->car_title }}" style="width: 100%;">
                            <span class="b-items__cars-one-img-type m-premium">PREMIUM</span>
                        </div>
                        <div class="b-items__cars-one-info">
                            <form class="b-items__cars-one-info-header">
                                <h2>{{ $item->car->car_title }}</h2>
                            </form>
                            <div class="row s-noRightMargin">
                                <div class="col-md-9 col-xs-12">
                                    <p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate, and the Silverado</p>
                                    <div class="m-width row m-smallPadding">
                                        <div class="col-xs-6">
                                            <div class="row m-smallPadding">
                                                <div class="col-xs-6">
                                                    <span class="b-items__cars-one-info-title">Body Style:</span>
                                                    <span class="b-items__cars-one-info-title">Mileage:</span>
                                                    <span class="b-items__cars-one-info-title">Transmission:</span>
                                                </div>
                                                <div class="col-xs-6">
                                                    <span class="b-items__cars-one-info-value">Sedan</span>
                                                    <span class="b-items__cars-one-info-value">35,000 KM</span>
                                                    <span class="b-items__cars-one-info-value">6-Speed Auto</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="row m-smallPadding">
                                                <div class="col-xs-4">
                                                    <span class="b-items__cars-one-info-title">Engine:</span>
                                                    <span class="b-items__cars-one-info-title">Color:</span>
                                                    <span class="b-items__cars-one-info-title">Specs:</span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <span class="b-items__cars-one-info-value">DOHC 24-valve V-6</span>
                                                    <span class="b-items__cars-one-info-value">White</span>
                                                    <span class="b-items__cars-one-info-value">2-Passenger, 2-Door</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="b-items__cars-one-info-price">
                                        <div class="pull-right">
                                            <h3>Price:</h3>
                                            <h4>$29,415</h4>
                                        </div>
                                        <a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                {{ $vehicleDetail->links() }}
            </div>
        </div>
    </div>
</div>

@endsection