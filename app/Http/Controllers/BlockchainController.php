<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockchainController extends Controller
{
    function getall(){
        return view("buyer.vehiclelist");
    }
    function addCar(){
        return view("buyer.government");
    }
}
