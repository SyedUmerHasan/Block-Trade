<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InteriorColor;

class InteriorColorController extends Controller
{
    public function create(){
        return view('admin.interiorcolor.create_interiorcolor');
    }
    public function edit($id){
        $interiorcolor = InteriorColor::find($id);
        if($interiorcolor == null){
            abort(404);
        }
        return view('admin.interiorcolor.edit_interiorcolor')->with(compact('interiorcolor'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'color_name' => 'required|unique:interiorcolor'
        ]);
        $interiorcolor = new InteriorColor();
        $interiorcolor->color_name = $request->color_name;
        $interiorcolor->save();
        return redirect()->back()->with('success','Interior Color added successfully!');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'color_name' => 'required|unique:interiorcolor'
        ]);
        $interiorcolor = InteriorColor::find($id);
        if($interiorcolor == null){
            return redirect()->back()->with('success','Interior Color Not Found!');
        }
        $interiorcolor->color_name = $request->color_name;
        $interiorcolor->save();
        return redirect()->back()->with(compact('interiorcolor'))->with('success','Interior Color updated successfully!');
    }
    public function getall(){
        $interiorcolor = InteriorColor::all();
        return view('admin.interiorcolor.list_interiorcolor')->with(compact('interiorcolor'));
    }
}
