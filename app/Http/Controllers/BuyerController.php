<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublishedVehicle;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;

class BuyerController extends Controller
{
    public function dashboard(){
        $vehicleStatus = PublishedVehicle::with('features')
        ->with('details')
        ->with('images')
        ->with('contact')->get();
        
        // dd($vehicleStatus);

        return view('admin.buyer.buyer_dashboard')->with(compact('vehicleStatus'));
    }
}
