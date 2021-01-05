<?php

namespace App\Http\Controllers;

use App\CarManufacturer;
use App\CarModel;
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
    public function inventory(Request $request){ 
        /** Query Params */
        $make =         isset($request->make) ? $request->make : '';
        $body =         isset($request->body_type) ? $request->body_type : '';
        $mileage =      isset($request->mileage) ? $request->mileage : '';
        $location =     isset($request->location) ? $request->location : '';
        $condition =    isset($request->condition) ? $request->condition : '';
        $model =        isset($request->model) ? $request->model : '';
        $title =        isset($request->title) ? $request->title : '';
        /** Database ID Query */
        $carmodel = CarModel::where('model_name','LIKE',"%" . $model . "%")->first();
        $carmanufacturer = null;
        if(isset($make)){
            $carmanufacturer = CarManufacturer::where('brand_name','LIKE',"%" . $make . "%")->first();
        }
        /** Main Query */
        $vehicleDetail = VehicleDetail::with('images')
                ->with('contact')
                ->with('manufacturer')
                ->with('model')
                ->OrWhere(function ($query) use($title) {
                    if(isset($title)){
                        $query->where('car_title', 'LIKE', "%".$title."%" );
                    }
                })
                ->OrWhere(function ($query) use($body) { 
                    if(isset($body)){
                        $query->where('body_type', 'like', '%' .$body .'%' );
                    }
                })
                ->OrWhere(function ($query) use($carmodel) {
                    if(isset($carmodel)&& isset($carmodel->id)){
                        $query->where('carmodel_id', '=', $carmodel->id );
                    }
                })
                ->OrWhere(function ($query) use($carmanufacturer) {
                    if(isset($carmanufacturer)&& isset($carmanufacturer->id)){
                        $query->where('carmanufacturer_id', '=', $carmanufacturer->id );
                    }
                })
                ->paginate(5);

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

    public function detail($id){
        $vehicledetail = VehicleDetail::findorfail($id);
        return view("buyer.vehicle-detail")->with(compact('vehicledetail'));
    }

}
