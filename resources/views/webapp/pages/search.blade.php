@extends('webapp.layout.webapp')


@section('body')

<style>
.b-items__aside-sell-img {
    background: url("/web-assets/car_ad.jpg") center no-repeat;
    background-size: cover;
    height: 200px;
    text-align: center;
}
.b-pageHeader {
    padding: 40px 0;
    background: url("/web-assets/car_ad.jpg") center !important;
    background-size: cover;
}
</style>
<section class="b-pageHeader">
    <div class="container">
        <h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Auto Cars Listing</h1>
        <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
            <h3>Your search returned {{$vehicleDetail->total()}} results</h3>
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
                                        <select name="brand" class="m-select">
                                            <?php
                                            $currentBrand = Request::get('brand');
                                            ?>
                                            <option value="">Search By Make</option>
                                            @foreach (\App\VehicleDetail::groupBy('vehiclebrand_id')->take(10)->get() as $item)
                                                <?php
                                                    $data  =  \App\CarManufacturer::find($item->vehiclebrand_id)->brand_name;     
                                                ?>
                                                @if (isset($currentModel) && $currentBrand == $data)
                                                <option value="{{ $data }}" selected>{{ $data }}</option>
                                                @else
                                                <option value="{{ $data }}">{{ $data }}</option>                                                
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>SELECT A MODEL</label>
                                    <div>
                                    <select name="model" class="m-select">
                                        <?php
                                        $currentModel = Request::get('model');
                                        ?>
                                        <option value="" selected="">Search By Model</option>
                                        @foreach (\App\VehicleDetail::groupBy('brandmodel_id')->take(10)->get() as $item)
                                            <?php
                                            $data  =  \App\BrandModel::find($item->brandmodel_id)->model_name;      
                                            ?>
                                            @if (isset($currentModel) && $currentModel == $data)
                                            <option value="{{ $data }}" selected>{{ $data }}</option>
                                            @else
                                            <option value="{{ $data }}">{{ $data }}</option>                                                
                                            @endif
                                        @endforeach
                                    </select>
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                </div>
                                <div class="b-items__aside-main-body-item">
                                    <label>VEHICLE STATUS</label>
                                    <div>
                                        <select name="cartype" class="m-select">
                                            <option value="" selected="">Vehicle Status</option>
                                            <option value="new">New Cars</option>
                                            <option value="used">Used Cars</option>
                                            <option value="japanese">Japanese Cars</option>
                                            <option value="imported">Imported Cars</option>
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
                                BlockTrade has made buying and selling and transfer of ownership alot easier. Interested in buy and selling cars? 
                            </p>
                            @if (Auth::check())
                            <a href="{{ route('webapp.submit1') }}" class="btn m-btn">Create Ad<span class="fa fa-angle-right"></span></a>                                
                             @else
                            <a href="{{ route('register') }}" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>                                
                            @endif
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
                                    <p>
                                    @if(isset($item->comments))
                                    {{$item->comments}}                                    
                                    @else
                                    In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate, and the Silverado</p>
                                    @endif
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="b-items__cars-one-info-price">
                                        <div class="pull-right">
                                            <h3>Price:</h3>
                                            <h4>${{$item->contact[0]->price}}</h4>
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