<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleDetail;
use App\CarManufacturer;
use App\BrandModel;

class SearchController extends Controller
{
    public function index(Request $request){
        $queryParams = $request->query();
        /***
         * Filter Parameters
         */
        $type = (isset($queryParams["type"])  ?$queryParams["type"] : null);
        $brand = (isset($queryParams["brand"]) ? $queryParams["brand"] : null);
        $model = (isset($queryParams["model"]) ? $queryParams["model"] : null);
        $cartype = (isset($queryParams["cartype"]) ? $queryParams["cartype"] : null);
        $minyear = (isset($queryParams["minyear"]) ? $queryParams["minyear"] : null);
        $maxyear = (isset($queryParams["maxyear"]) ? $queryParams["maxyear"] : null);
        $minrange = (isset($queryParams["minrange"]) ? $queryParams["minrange"] : null);
        $maxrange = (isset($queryParams["maxrange"]) ? $queryParams["maxrange"] : null);

        $foundmodel = BrandModel::where('model_name', '=', $model)->first();
        $foundbrand = CarManufacturer::where('brand_name', '=', $brand)->first();

        $vehicleDetail =  VehicleDetail::with('features')->with('images')
                        ->with('contact')
                        ->with('brands')
                        ->with('model')
                        ->with('car')
                        ->Where(function ($query) use($type) { 
                            $query->where('body_type', 'like', '%' .$type .'%' );
                        })
                        ->Where(function ($query) use($foundbrand) {
                            if(isset($foundbrand)){
                                $query->where('vehiclebrand_id', '=', $foundbrand->id );
                            }
                        })
                        ->Where(function ($query) use($foundmodel) {
                            if(isset($foundmodel)){
                                $query->where('brandmodel_id', '=', $foundmodel->id );
                            }
                        })
                        ->Where(function ($query) use($minyear) {
                            if(isset($minyear)){
                                $query->where('year_manufacture', '>=', $minyear );
                            }
                        })
                        ->Where(function ($query) use($maxyear) {
                            if(isset($maxyear)){
                                $query->where('year_manufacture', '<=', $maxyear );
                            }
                        })
                        ->paginate(5);

        return view('webapp.pages.search')
        ->with(compact('foundmodel'))
        ->with(compact('foundbrand'))
        ->with(compact('carModels'));

    }
}
