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

        $vehicleDetail = new VehicleDetail;
        $vehicleDetail =  $vehicleDetail::with('features')->with('images')
                                        ->with('contact')->with('brands')
                                        ->with('model')->with('car');
        if(isset($type)){
            $vehicleDetail = $vehicleDetail->where('body_type', 'like', '%'. $type.'%');
        }
        if(isset($brand)){
            $vehicleDetail = $vehicleDetail->whereHas('brands', function($q) use ($brand)
            {
                $q->where('brand_name', '=', $brand);
            });
        }
        if(isset($model)){
            $vehicleDetail = $vehicleDetail->whereHas('model', function($q) use ($model)
            {
                $q->where('model_name', '=', $model);
            });
        }
        if(isset($minyear)){
            $vehicleDetail = $vehicleDetail->where('year_manufacture', '>=', $minyear);
        }
        if(isset($maxyear)){
            $vehicleDetail = $vehicleDetail->where('year_manufacture', '<=', $maxyear);
        }
        $vehicleDetail = $vehicleDetail->whereHas('car', function($q)
        {
            $q->where('status', '=', true);
        });
        dd($vehicleDetail);
        $vehicleDetail = $vehicleDetail->paginate(5);
        
        $carManufacturer = CarManufacturer::orderBy('brand_name', 'asc')->get();
        $carModels = BrandModel::all();

        return view('webapp.pages.search')
        ->with(compact('vehicleDetail'))
        ->with(compact('carManufacturer'))
        ->with(compact('carModels'));

    }
}
