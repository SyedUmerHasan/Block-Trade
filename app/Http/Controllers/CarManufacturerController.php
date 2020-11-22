<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarManufacturer;
use Session;

class CarManufacturerController extends Controller
{
    public function create(){
        return view('admin.automotive.manufacturer.create-manufacturer');
    }
    public function edit($id){
        $vehiclebrand = CarManufacturer::find($id);
        if($vehiclebrand == null){
            abort(404);
        }
        return view('admin.automotive.manufacturer.edit-manufacturer')->with(compact('vehiclebrand'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:vehiclebrand'
        ]);
        $vehiclebrand = new CarManufacturer();
        $vehiclebrand->brand_name = $request->brand_name;
        $vehiclebrand->save();
        Session::flash('message', "Vehicle Manufacturer Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Manufacturer added successfully!');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:vehiclebrand'
        ]);
        $vehiclebrand = CarManufacturer::find($id);
        if($vehiclebrand == null){
            return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Manufacturer Not Found!');
        }
        $vehiclebrand->brand_name = $request->brand_name;
        $vehiclebrand->save();
        Session::flash('message', "Vehicle Manufacturer Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Vehicle Manufacturer updated successfully!');
    }
    public function getall(){
        $vehiclebrand = CarManufacturer::all();
        return view('admin.automotive.manufacturer.list-manufacturer')->with(compact('vehiclebrand'));
    }
}
