<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Followers;
use Auth;
use Session;

class MainSiteController extends Controller
{
    public function newsfeed(){
        $post = Post::with('user')->orderBy('created_at', 'desc')->get();
        // dd($post);
        
        // $post = User::with('post')->get();
        // dd($post);
        return view('blockchain.newsfeed')->with(compact('post'));
    }
    
    public function feed($slug){
        $post = Post::with('user')->where('slug' , "=", $slug)->first();
        $post_count = Post::where('user_id', '=', $post->user->id )->count();
        $follower_count = Followers::where('user_id', "=", $post->user->id)->count();
        $following_count = Followers::where('follower_id', "=", $post->user->id)->count();
        $follow_sensor= Followers::where('follower_id', "=", $post->user->id)->where('user_id', "=", Auth::user()->id)->count();
        // return $follow_sensor;
        return view('blockchain.eachfeed')->with(compact('post'))
                        ->with(compact('post_count'))
                        ->with(compact('follower_count'))
                        ->with(compact('following_count'))
                        ->with(compact('follow_sensor'));

    }

    public function createPost(){
        return view('blockchain.create_post');
    }

    public function addPost(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'category' => 'required',
            'crowd_price' => 'required',
            'details' => 'required'
        ]);
        try {

            $slug = Str::slug($request->heading, '-');
            $count = Post::where("slug", "=", $slug)->count();
            if($count > 0){
                Session::flash('error', "Post Name must be unique");
                return redirect()->back();
            }


            $imageName = null;
            if ($request->file('image_url')) {
                $imageName = str_replace(' ', '', $request->file('image_url')->getClientOriginalName());
                $imageName=time().$imageName;
                $request->file('image_url')->move(public_path().'/blockchain/', $imageName);  
                $imageName = "/blockchain/".$imageName;
            }

            $post = new Post();
            $post->slug =$slug;
            $post->heading =$request->heading;
            $post->category =$request->category;
            $post->image =$imageName;
            $post->crowd_price =$request->crowd_price;
            $post->recieved_crowd_price =0;
            $post->details =$request->details;
            $post->like_count =0;
            $post->share_count =0;
            // if(empty(Auth::user())){
                $post->user_id =1;
            // }
            // else{
            //     $post->user_id =Auth::user()->id;
            // }
            $post->save();
    
        } catch (\Throwable $th) {
            //throw $th;
                Session::flash('error', $th);
                return redirect()->back();
        }
        Session::flash('success', "Post craeted successfully");
        return redirect()->back();
    }
    
    
    public function addPostApi(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'category' => 'required',
            'crowd_price' => 'required',
            'details' => 'required'
        ]);
        try {
            $slug = Str::slug($request->heading, '-');
            $count = Post::where("slug", "=", $slug)->count();
            if($count > 0){
                return response()->json([
                    'status' => false,
                    'code' => 403,
                    'message' => 'Already Exist'
                ]);
            }
            $post = new Post();
            $post->slug =$request->slug;
            $post->heading =$request->heading;
            $post->category =$request->category;
            $post->image =$request->slug;
            $post->crowd_price =$request->crowd_price;
            $post->recieved_crowd_price =0;
            $post->details =$request->details;
            $post->like_count =0;
            $post->share_count =0;
            if(empty(Auth::user())){
                $post->user_id =1;
            }
            else{
                $post->user_id =Auth::user()->id;
            }
            $post->save();
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => $th
            ]);
            return $th;
        }
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => "Post created successfully",
            'data' => $post
        ]);
    }
    
    public function listPost()
    {
        $post = Post::all();
        return $post;
    }
}
