<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Followers;

class FollowerController extends Controller
{
    public function addfollowing($user_id, $follow_id){
        $follower = new Followers();
        $follower->user_id = $user_id;
        $follower->follower_id = $follow_id;
        $follower->save();
        return redirect()->back();
    }

    public function removefollowing($user_id, $follow_id){
        $follower = Followers::where('follower_id', "=", $user_id)->where('user_id', "=",$follow_id)->first()->delete();
        return redirect()->back();
    }

}
