<?php

namespace App\Http\Controllers;

use App\VehicleDetail;
use App\VehicleImages;
use Illuminate\Http\Request;
use Auth;
use Session;

class UserController extends Controller
{
    public function dashboard()
    {
        return view("newtheme.home");
    }
    public function sell()
    {
        return view("user.seller");
    }
    public function buy()
    {
        return view("user.buyer");
    }
    public function inventory(){
        $vehicleDetail = VehicleDetail::paginate(5);

        return view("newtheme.inventory")->with(compact('vehicleDetail'));
    }
    public function step1(){
        return view("newtheme.car-step1");
    }
    public function step2($id){
        $vehicleDetail = VehicleDetail::find($id);
        // dd($vehicleDetail->id);
        return view("newtheme.car-step2")->with(compact('vehicleDetail'));
    }
    public function step3(){
        return view("newtheme.car-step3");
    }

}
