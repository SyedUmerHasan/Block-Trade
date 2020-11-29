<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AdminController extends Controller
{
    public function login(){
        return view("userregistration.user-login");
    }

    public function register(){
        return view("userregistration.user-register");
    }
    public function resetpassword(){
        return view("admin.auth.forget-password");
    }
    public function home(){
        dd("Admin");
        $buyerCount = User::where("is_active", "=", "true")->where("role", "=", "buyer")->count();
        $sellerCount = User::where("is_active", "=", "true")->where("role", "=", "seller")->count();
        $adminCount = User::where("is_active", "=", "true")->where("role", "=", "admin")->count();
        $admins = User::where("is_active", "=", "true")->where("role", "=", "admin")->take(10)->get();
        // dd($teachers);
        return view('admin.dashboard')->with(compact('buyerCount'))
        ->with(compact('sellerCount'))
        ->with(compact('carRegistered'))
        ->with(compact('admins'))
        ->with(compact('adminCount'));
    }
    public function changeAccountType(){
        $user = User::find(Auth::user()->id);
        
        if($user->role == "admin")
        {
            
            return redirect()->back();
        }
        else{
            if($user->role == "buyer"){
                $user->role = "seller";
                $user->save();
            }
            else if($user->role == "seller") {
                $user->role = "buyer";
                $user->save();
            }
            
            return redirect()->back();
        }
    }
}
