<?php

namespace App\Http\Controllers;

use App\CarManufacturer;
use Illuminate\Http\Request;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;

class BuyerController extends Controller
{
    public function dashboard(){
        
        dd("implment");
        // dd($vehicleStatus);

        return view('admin.buyer.buyer_dashboard')->with(compact('vehicleStatus'));
    }

    public function editVehicleDetails($id){
        
        $vehicleDetail = VehicleDetail::with('features')
            ->with('images')
            ->find($id);
        $carBrands = CarManufacturer::all();
        $vehicleImages = $vehicleDetail->images;

        return view('buyer.vehicle_detail_edit')
        ->with(compact('carBrands'))
        ->with(compact('vehicleDetail'))
        ->with(compact('vehicleImages'));
    }
}
