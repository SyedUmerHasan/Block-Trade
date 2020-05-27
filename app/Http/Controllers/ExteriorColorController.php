<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExteriorColor;

class ExteriorColorController extends Controller
{
    public function create(){
        return view('admin.exteriorcolor.create_exteriorcolor');
    }
    public function edit($id){
        $exteriorcolor = ExteriorColor::find($id);
        if($exteriorcolor == null){
            abort(404);
        }
        return view('admin.exteriorcolor.edit_exteriorcolor')->with(compact('exteriorcolor'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'color_name' => 'required|unique:exteriorcolor'
        ]);
        $exteriorcolor = new ExteriorColor();
        $exteriorcolor->color_name = $request->color_name;
        $exteriorcolor->save();
        return redirect()->back()->with('success','Exterior Color added successfully!');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'color_name' => 'required|unique:exteriorcolor'
        ]);
        $exteriorcolor = ExteriorColor::find($id);
        if($exteriorcolor == null){
            return redirect()->back()->with('success','Exterior Color Not Found!');
        }
        $exteriorcolor->color_name = $request->color_name;
        $exteriorcolor->save();
        return redirect()->back()->with(compact('exteriorcolor'))->with('success','Exterior Color updated successfully!');
    }
    public function getall(){
        $exteriorcolor = ExteriorColor::all();
        return view('admin.exteriorcolor.list_exteriorcolor')->with(compact('exteriorcolor'));
    }
}
