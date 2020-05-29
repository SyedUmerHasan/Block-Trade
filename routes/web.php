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
 *
 * Auth Portal Routes
 *
 */
 Route::group([], function(){
    Route::get('/', function () {return redirect()->route("webapp.home");})->name("redirect.center");
    /****
     * Pages
     */
    Route::get('/home','ClassifiedAdController@index')->name("webapp.home");
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/vehicle/detail/','ClassifiedAdController@submit1')->name("webapp.submit1");
        Route::get('/vehicle/features/{id}','ClassifiedAdController@submit2')->name("webapp.submit2");
        Route::get('/vehicle/images/{id}','ClassifiedAdController@submit3')->name("webapp.submit3");
        Route::get('/vehicle/contact/{id}','ClassifiedAdController@submit4')->name("webapp.submit4");
        Route::get('/vehicle/publish/{id}','ClassifiedAdController@submit5')->name("webapp.submit5");
    });
    /***
     * APIS
     */
    Route::post('/vehicledetail/add','ClassifiedAdController@addVehicleDetails')->name("webapp.vehicledetail.add");
    Route::post('/vehiclefeature/add/{id}','ClassifiedAdController@addvehiclefeature')->name("webapp.vehiclefeature.add");
    Route::post('/vehicleimage/add/{id}','ClassifiedAdController@addVehicleImages')->name("webapp.vehicleimage.add");
    Route::post('/vehiclecontact/add/{id}','ClassifiedAdController@addVehicleContact')->name("webapp.vehiclecontact.add");
    Route::post('/vehicle/publish/{id}','ClassifiedAdController@publishVehicle')->name("webapp.vehicle.publish");
    
});



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


Route::group(['prefix' => 'admin'], function () {


    Route::get('changeAccountType', 'AdminController@changeAccountType')->name('changeAccountType');

    // Home Redirect Controller
    Route::get('', function () {return redirect()->route("home");});

    Route::get('profile/view/{id}', 'ProfileController@view')->name('profile.view');
    Route::get('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
    Route::post('profile/update/{id}', 'ProfileController@update')->name('profile.update');
    Route::post('profile/resetPassword/{id}', 'ProfileController@resetPassword')->name('profile.resetPassword');


    //  Authenticated Routes
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('home', 'AdminController@home')->name('home');
        Route::get('courses/dashboard', 'AdminController@coursesDashboard')->name('courses.dashboard');
        Route::get('support', 'SupportController@getList')->name('support');


        Route::get('carbrand', 'VehicleBrandController@getall')->name('vehiclebrand.getall');
        Route::get('carbrand/create', 'VehicleBrandController@create')->name('vehiclebrand.create');
        Route::get('carbrand/edit/{id}', 'VehicleBrandController@edit')->name('vehiclebrand.edit');
        Route::post('carbrand/add', 'VehicleBrandController@add')->name('vehiclebrand.add');
        Route::post('carbrand/update/{id}', 'VehicleBrandController@update')->name('vehiclebrand.update');

    
        Route::group(['prefix' => 'interiorcolor'], function() {
            Route::get('', 'InteriorColorController@getall')->name('interiorcolor.getall');
            Route::get('create', 'InteriorColorController@create')->name('interiorcolor.create');
            Route::get('edit/{id}', 'InteriorColorController@edit')->name('interiorcolor.edit');
            Route::post('add', 'InteriorColorController@add')->name('interiorcolor.add');
            Route::post('update/{id}', 'InteriorColorController@update')->name('interiorcolor.update');
        });
            
        Route::group(['prefix' => 'exteriorcolor'], function () {
            Route::get('', 'ExteriorColorController@getall')->name('exteriorcolor.getall');
            Route::get('create', 'ExteriorColorController@create')->name('exteriorcolor.create');
            Route::get('edit/{id}', 'ExteriorColorController@edit')->name('exteriorcolor.edit');
            Route::post('add', 'ExteriorColorController@add')->name('exteriorcolor.add');
            Route::post('update/{id}', 'ExteriorColorController@update')->name('exteriorcolor.update');
        });
        
        
        Route::group(['prefix' => 'vehicle'], function () {
            Route::get('', 'AdminVehicleController@getall')->name('vehicle.getall');
            Route::get('/details', 'AdminVehicleController@getdetails')->name('vehicle.details');
            Route::get('/details/{id}', 'AdminVehicleController@geteditdetails')->name('vehicle.details.edit');
            Route::post('/details/create', 'AdminVehicleController@createdetails')->name('vehicle.details.create');
            Route::get('/features/{id}', 'AdminVehicleController@getfeatures')->name('vehicle.features');
            Route::post('/features/create/{id}', 'AdminVehicleController@createfeatures')->name('vehicle.features.create');
            Route::get('/images/{id}', 'AdminVehicleController@getimages')->name('vehicle.images');
            Route::post('/images/create/{id}', 'AdminVehicleController@createimages')->name('vehicle.images.create');
            Route::get('/contact/{id}', 'AdminVehicleController@getcontacts')->name('vehicle.contact');
            Route::post('/contact/create/{id}', 'AdminVehicleController@createcontacts')->name('vehicle.contact.create');
            Route::get('/publish/{id}', 'AdminVehicleController@getpublish')->name('vehicle.publish');
            Route::post('/publish/create/{id}', 'AdminVehicleController@createpublishVehicle')->name('vehicle.publish.create');

            Route::get('/vehicle/ad/approve/{id}', 'AdminVehicleController@approveAdStatus')->name('vehicle.approve.status');
            

        });

    });

    
});


Route::group(['middleware' => 'is_buyer', 'prefix' => 'buyer'], function () {
    Route::get('home', 'BuyerController@dashboard')->name('buyer.home');
});


Route::group(['middleware' => 'is_seller', 'prefix' => 'seller'], function () {
    Route::get('home', 'SellerController@dashboard')->name('seller.home');
});