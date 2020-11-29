<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockchainController extends Controller
{
    function getall(){
        return view("buyer.vehiclelist");
    }
}
