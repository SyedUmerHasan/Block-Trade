<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrandModel;
use App\CarManufacturer;
use Session;

class CarModelController extends Controller
{
    public function create(){
        $carbrand = CarManufacturer::all();
        return view('admin.brandmodel.create_brandmodel')->with(compact('carbrand'));
    }

    public function edit($id){
        $vehiclebrand = BrandModel::find($id);
        $carbrand = CarManufacturer::all();
        if($vehiclebrand == null){
            abort(404);
        }
        return view('admin.brandmodel.edit_brandmodel')->with(compact('vehiclebrand'))->with(compact('carbrand'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'model_name' => 'required|unique:brandmodel',
            'vehiclebrand_id' => 'required',
        ]);
        $vehiclebrand = new BrandModel();
        $vehiclebrand->model_name = $request->model_name;
        $vehiclebrand->vehiclebrand_id = $request->vehiclebrand_id;
        $vehiclebrand->save();
        Session::flash('message', "Car Model Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Car Model added successfully!');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'model_name' => 'required|unique:brandmodel',
            'vehiclebrand_id' => 'required',
        ]);
        $vehiclebrand = BrandModel::find($id);
        if($vehiclebrand == null){
            return redirect()->back()->with(compact('vehiclebrand'))->with('success','Car Model Not Found!');
        }
        $vehiclebrand->model_name = $request->model_name;
        $vehiclebrand->vehiclebrand_id = $request->vehiclebrand_id;
        $vehiclebrand->save();
        Session::flash('message', "Car Model Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Car Model updated successfully!');
    }

    public function getall(){
        $vehiclebrand = BrandModel::join("vehiclebrand", "vehiclebrand.id", "vehiclebrand_id")->get();
        return view('admin.brandmodel.list_brandmodel')->with(compact('vehiclebrand'));
    }

}
