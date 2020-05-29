<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VehicleStatus;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;

class SellerController extends Controller
{
    public function dashboard(){
        $vehicleStatus = VehicleStatus::with('VehicleDetail')
        ->with('VehicleFeatures')
        ->with('VehicleImages')
        ->with('VehicleContact')->get();
        
        // dd($vehicleStatus);

        return view('admin.buyer.buyer_dashboard')->with(compact('vehicleStatus'));
    }
}
