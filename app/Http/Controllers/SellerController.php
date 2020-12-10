<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;

class SellerController extends Controller
{
    public function dashboard(){
        return view('admin.buyer.buyer_dashboard')->with(compact('vehicleStatus'));
    }
}
