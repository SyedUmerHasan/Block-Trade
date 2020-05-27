<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function login(){
        return view("admin.auth.login");
    }

    public function register(){
        return view("admin.auth.signup");
    }
    public function resetpassword(){
        return view("admin.auth.forget-password");
    }
    public function home(){
        $buyerCount = User::where("is_active", "=", "true")->where("role", "=", "buyer")->count();
        $sellerCount = User::where("is_active", "=", "true")->where("role", "=", "seller")->count();
        $adminCount = User::where("is_active", "=", "true")->where("role", "=", "admin")->count();
        $admins = User::where("is_active", "=", "true")->where("role", "=", "admin")->take(10)->get();
        // dd($teachers);
        return view('admin.dashboard')->with(compact('buyerCount'))
        ->with(compact('sellerCount'))
        ->with(compact('admins'))
        ->with(compact('adminCount'));
    }
}
