<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view("user.home");
    }
    public function sell()
    {
        return view("user.seller");
    }
    public function buy()
    {
        return view("user.buyer");
    }
}
