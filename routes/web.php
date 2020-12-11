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
 * Authentication Routes
 */
Auth::routes();
/**
 * Overrided routes for Authentication
 */
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'AdminController@login')->name('loginpage');
    Route::get('register', 'AdminController@register')->name('register');     
    Route::get('password/reset', 'AdminController@resetpassword')->name('password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});
Route::post('register', 'Auth\RegisterController@register'); 
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {
    
    Route::get('', 'AdminController@home')->name('admin.home');

    Route::group(['prefix' => 'automotive'], function() {

        Route::group(['prefix' => 'manufacturer'], function () {
            Route::get('', 'CarManufacturerController@getall')->name('automotive.manufacturer.getall');
            Route::get('/create', 'CarManufacturerController@create')->name('automotive.manufacturer.create');
            Route::get('/edit/{id}', 'CarManufacturerController@edit')->name('automotive.manufacturer.edit');
            Route::post('/add', 'CarManufacturerController@add')->name('automotive.manufacturer.add');
            Route::post('/update/{id}', 'CarManufacturerController@update')->name('automotive.manufacturer.update');
        });

        Route::group(['prefix' => 'model'], function () {
            Route::get('', 'CarModelController@getall')->name('automotive.model.getall');
            Route::get('/create', 'CarModelController@create')->name('automotive.model.create');
            Route::get('/edit/{id}', 'CarModelController@edit')->name('automotive.model.edit');
            Route::post('/add', 'CarModelController@add')->name('automotive.model.add');
            Route::post('/update/{id}', 'CarModelController@update')->name('automotive.model.update');
        });

        Route::group(['prefix' => 'exteriorcolor'], function () {
            Route::get('', 'ExteriorColorController@getall')->name('exteriorcolor.getall');
            Route::get('create', 'ExteriorColorController@create')->name('exteriorcolor.create');
            Route::get('edit/{id}', 'ExteriorColorController@edit')->name('exteriorcolor.edit');
            Route::post('add', 'ExteriorColorController@add')->name('exteriorcolor.add');
            Route::post('update/{id}', 'ExteriorColorController@update')->name('exteriorcolor.update');
        });

    });
    
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('', function(){
        return redirect()->route('dashboard');
    });
    Route::get("home", 'UserController@dashboard')->name('dashboard');
    Route::get('add-product', 'UserController@step1')->name('add-product');
    Route::get('add-product/{id}', 'UserController@step2')->name('add-product.create');

    Route::post("info", "VehicleController@carInformation")->name('car.detail.add');
    Route::post("contact/add", "VehicleController@carContactDetails")->name('car.contact.add');

    Route::get('portal', 'UserController@dashboard')->name('user.home');
    Route::get('carsearch', 'UserController@inventory')->name('search');
    Route::get('buy', 'UserController@buy')->name('user.buy');
    Route::get('sell', 'UserController@dashboard')->name('user.sell');
    Route::group(['prefix' => 'secure'], function () {
        Route::get('', 'BlockchainController@getall')->name('blockchain');
    });

    // Home Redirect Controller
    Route::group(['prefix' => 'profile'], function () {
        Route::get('view/{id}', 'ProfileController@view')->name('profile.view');
        Route::get('edit/{id}', 'ProfileController@edit')->name('profile.edit');
        Route::post('update/{id}', 'ProfileController@update')->name('profile.update');
        Route::post('resetPassword/{id}', 'ProfileController@resetPassword')->name('profile.resetPassword');
    });
   
    Route::get('support', 'SupportController@getList')->name('support');

});