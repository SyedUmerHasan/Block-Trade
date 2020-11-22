<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PublishedVehicle;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;

class SellerController extends Controller
{
    public function dashboard(){
        $vehicleStatus = PublishedVehicle::with('detail')
        ->with('features')
        ->with('images')
        ->with('contact')->get();

        return view('admin.buyer.buyer_dashboard')->with(compact('vehicleStatus'));
    }
}
