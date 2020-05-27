<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

use App\User;
use Auth;

class ProfileController extends Controller
{
    public function view($id){
        $profile = User::where('id', $id)->first();
        if($profile ==null){
            return abort(404);
        }
        else{
            return view('admin.Profile.ViewProfile')->with(compact('profile'));
        }
    }

    public function edit($id){
        if( Auth::user()->id != $id && Auth::user()->role !="admin"){
            return redirect()->route('pagenotfound');
        }

        $profile = User::where('id', $id)->first();
        // dd($profile->image_url);
        if($profile ==null){
            return redirect()->route('pagenotfound');
        }
        else{
            return view('admin.Profile.EditProfile')->with(compact('profile'));
        }
    }

    public function update(Request $request, $id){
        if( Auth::user()->id != $id && Auth::user()->role !="admin"){
            return redirect()->route('pagenotfound');
        }
        $validatedData = $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'experience' => 'required',
            'description' => 'required',
            'working' => 'required'
        ]);
        $profile = User::where('id', $id)->first();

        if($profile ==null){
            return redirect()->route('pagenotfound');
        }
        else{
            $imageName = null;
            if ($request->file('image_url')) {
                $imageName = str_replace(' ', '', $request->file('image_url')->getClientOriginalName());
                $imageName=time().$imageName;
                $request->file('image_url')->move(public_path().'/profile/', $imageName);  
                $imageName = "/profile/".$imageName;
            }
            if($imageName == null){
                User::where('id',$id)->update([
                    'user_name' => $request->username,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'experience' => $request->experience,
                    'working' => $request->working,
                    'description' => $request->description
                ]);

            }
            else{
                User::where('id',$id)->update([
                    'user_name' => $request->username,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'experience' => $request->experience,
                    'working' => $request->working,
                    'image_url' => $imageName,
                    'description' => $request->description
                ]);
            }
            return redirect()->route('profile.view',$profile->id)
                        ->with(compact('profile'))
                        ->with('success','User profile updated successfully!');
        }
    }

    public function resetPassword(Request $request, $id){
        if( Auth::user()->id != $id && Auth::user()->role !="admin"){
            return redirect()->route('pagenotfound');
        }
        $validatedData = $request->validate([
            'oldpassword' =>  ['required', new MatchOldPassword($id)],
            'newpassword' => ['required'],
            'repeatoldpassword'=> ['same:newpassword'],
        ]);

        $user = User::find($id);
        $user->password = Hash::make($request->newpassword);
        $user->save();
        return redirect()->route('profile.edit',$id)
        ->with('success','Password changed successfully!');

    }
}
