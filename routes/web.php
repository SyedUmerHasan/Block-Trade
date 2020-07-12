<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/***
 * Admin Portal Routes
 */
Auth::routes();
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'AdminController@login')->name('loginpage');
    Route::get('register', 'AdminController@register')->name('register');
    Route::get('password/reset', 'AdminController@resetpassword')->name('password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Login Routes
});

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register'); 

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::group(['middleware' => ['auth']], function () {

    Route::get("newsfeed","MainSiteController@newsfeed")->name('home');
    Route::get("home",function(){
        return redirect()->route('home');
    })->name('mainpage');
    Route::get("posts/create","MainSiteController@createPost")->name('post.create');
    Route::get("posts/all","MainSiteController@listPost")->name('post.all');
    Route::post("posts/add","MainSiteController@addPost")->name('post.add');
    

    Route::get("feed/{slug}","MainSiteController@feed")->name('feed');
    Route::get("{user_id}/follow/{follow_id}","FollowerController@addfollowing")->name('addfollowing');
    Route::get("/remove/{user_id}/follow/{follow_id}","FollowerController@removefollowing")->name('removefollowing');
    // addfollowing


    // Home Redirect Controller
    Route::get('', function () {return redirect()->route("home");});

    Route::get('profile/view/{id}', 'ProfileController@view')->name('profile.view');
    Route::get('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
    Route::post('profile/update/{id}', 'ProfileController@update')->name('profile.update');
    Route::post('profile/resetPassword/{id}', 'ProfileController@resetPassword')->name('profile.resetPassword');

    Route::get('support', 'SupportController@getList')->name('support');

    
});
