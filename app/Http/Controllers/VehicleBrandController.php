<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleBrand;
use Session;

class VehicleBrandController extends Controller
{
    public function create(){
        return view('admin.brandmodel.create_brandmodel');
    }
    public function edit($id){
        $vehiclebrand = VehicleBrand::find($id);
        if($vehiclebrand == null){
            abort(404);
        }
        return view('admin.brandmodel.edit_brandmodel')->with(compact('vehiclebrand'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:vehiclebrand'
        ]);
        $vehiclebrand = new VehicleBrand();
        $vehiclebrand->brand_name = $request->brand_name;
        $vehiclebrand->save();
        Session::flash('message', "Vehicle Brand Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Brand added successfully!');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:vehiclebrand'
        ]);
        $vehiclebrand = VehicleBrand::find($id);
        if($vehiclebrand == null){
            return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Brand Not Found!');
        }
        $vehiclebrand->brand_name = $request->brand_name;
        $vehiclebrand->save();
        Session::flash('message', "Vehicle Brand Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Brand updated successfully!');
    }
    public function getall(){
        $vehiclebrand = VehicleBrand::all();
        return view('admin.brandmodel.list_brandmodel')->with(compact('vehiclebrand'));
    }
}
