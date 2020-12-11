<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
use App\CarManufacturer;
use Session;

class CarModelController extends Controller
{
    public function create(){
        $carbrand = CarManufacturer::all();
        return view('admin.carmodel.create_brandmodel')->with(compact('carbrand'));
    }

    public function edit($id){
        $vehiclebrand = CarModel::find($id);
        $carbrand = CarManufacturer::all();
        if($vehiclebrand == null){
            abort(404);
        }
        return view('admin.carmodel.edit_brandmodel')->with(compact('vehiclebrand'))->with(compact('carbrand'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'model_name' => 'required|unique:carmodel',
            'carmanufacturer_id' => 'required',
        ]);
        $vehiclebrand = new CarModel();
        $vehiclebrand->model_name = $request->model_name;
        $vehiclebrand->carmanufacturer_id = $request->carmanufacturer_id;
        $vehiclebrand->save();
        Session::flash('message', "Car Model Added");
        return redirect()->back()->with(compact('vehiclebrand'))->with('success','Car Model added successfully!');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'model_name' => 'required|unique:carmodel',
            'carmanufacturer_id' => 'required',
        ]);
        $vehiclebrand = CarModel::find($id);
        if($vehiclebrand == null){
            return redirect()->back()->with(compact('vehiclebrand'))->with('success','Car Model Not Found!');
        }
        $vehiclebrand->model_name = $request->model_name;
        $vehiclebrand->carmanufacturer_id = $request->carmanufacturer_id;
        $vehiclebrand->save();
        Session::flash('message', "Car Model Added");
        return redirect()->back()
            ->with(compact('vehiclebrand'))
            ->with('success','Car Model updated successfully!');
    }

    public function getall(){
        $vehiclebrand = CarModel::join("vehicledetail", "carmodel.id", "carmodel_id")->get();
        return view('admin.carmodel.list_brandmodel')->with(compact('vehiclebrand'));
    }

}
