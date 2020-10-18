<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;
use App\InteriorColor;
use App\ExteriorColor;
use App\PublishedVehicle;
use App\CarManufacturer;
use App\BrandModel;
use Session;
use Auth;

class ClassifiedAdController extends Controller
{
    public function index(){
        return view('webapp.pages.main_home');
    }

    public function detail($id){
        $vehicleDetail =  VehicleDetail::find($id);
        if(!isset($vehicleDetail)){
            return redirect()->route('webapp.home');
        }
        $vehicleDetail = $vehicleDetail
        ->with('images')
        ->with('contact')
        ->with('brands')
        ->with('model')
        ->with('car')
        ->with('features')->first();
        return view('webapp.pages.detail')
        ->with(compact('vehicleDetail'));
    }

    public function submit1(){

        return view('webapp.pages.submit1');
    }

    public function submit2($id){
        $vehicleDetail = VehicleDetail::with('features')->find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        $vehicleFeature = $vehicleDetail->features;
        return view('webapp.pages.submit2')->with(compact('vehicleDetail'))
                                            ->with(compact('vehicleFeature'));

    }
    
    public function submit3($id){
        $vehicleDetail = VehicleDetail::with('features')
                                        ->with('images')
                                        ->find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        $vehicleFeature = $vehicleDetail->features;
        $vehicleimages = $vehicleDetail->images;
        if(sizeof($vehicleFeature) == 0){
            return redirect()->route('webapp.submit2',$id);
        }
        return view('webapp.pages.submit3')->with(compact('vehicleDetail'))
                                            ->with(compact('vehicleFeature'))
                                            ->with(compact('vehicleimages'));
    }
    public function submit4($id){
        $vehicleDetail = VehicleDetail::find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        $vehicleContact = vehicleContact::where('vehicledetail_id' , '=' , $vehicleDetail->id)->first();
        $interiorcolor = InteriorColor::all();
        $exteriorcolor = ExteriorColor::all();
        return view('webapp.pages.submit4')
        ->with(compact('vehicleDetail'))
        ->with(compact('interiorcolor'))
        ->with(compact('exteriorcolor'))
        ->with(compact('vehicleContact'));

    }
    public function submit5($id){
        $vehicleDetail = VehicleDetail::find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        $vehicleContact = VehicleContact::where('vehicledetail_id' , '=' , $vehicleDetail->id)->first();
        return view('webapp.pages.submit5')->with(compact('vehicleDetail'))
                                            ->with(compact('vehicleContact'));
    }
    /**
     * Implemenatation of Submit 1
     */
    public function addVehicleDetails(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'vehiclebrand_id' => 'required',
            'brandmodel_id' => 'required',
            'year_manufacture' => 'required',
            'body_type' => 'required',
            'number_seat' => 'required',
            'number_door' => 'required',
            'number_gear' => 'required',
            'tranmission_type' => 'required',
            'drive_type' => 'required',
            'engine_type' => 'required',
            'number_cylinder' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
            'chasis_number' => 'required|unique:vehicledetail'
        ]);
        $vehicleDetail = VehicleDetail::create([
            'users_id' => Auth::user()->id,
            'vehiclebrand_id' => $request->vehiclebrand_id,
            'brandmodel_id' => $request->brandmodel_id,
            'year_manufacture' => $request->year_manufacture,
            'body_type' => $request->body_type,
            'number_seat' => $request->number_seat,
            'number_door' => $request->number_door,
            'number_gear' => $request->number_gear,
            'tranmission_type' => $request->tranmission_type,
            'drive_type' => $request->drive_type,
            'engine_type' => $request->engine_type,
            'number_cylinder' => $request->number_cylinder,
            'engine_capacity' => $request->engine_capacity,
            'fuel_type' => $request->fuel_type,
            'chasis_number' => $request->chasis_number
        ]);
        // Mail::to($data['email'])->send(new WelcomeMail($user));
        Session::flash('message', "Vehicle Details Added Successfully");
        // return redirect()->back(); 
        return redirect()->route('webapp.submit2', $vehicleDetail->id)->with(compact('vehicleDetail'));
    }
    /**
     * Implemenatation of Submit 2
     */
    public function addVehicleFeature(Request $request){
        // $validatedData = $request->validate([
        //     'abs' => 'required',
        //     'alloywheels' => 'required',
        //     'passengerairbag' => 'required',
        //     'heateddoormirrors' => 'required',
        //     'airconditioning' => 'required',
        //     'tripcomputer' => 'required',
        //     'sideairbags' => 'required',
        //     'audioremotecontrol' => 'required',
        //     'foldingrearseats' => 'required',
        //     'centrallocking' => 'required',
        //     'weathershields' => 'required',
        //     'electricfrontseats' => 'required',
        //     'engineimmobiliser' => 'required',
        //     'foglamps' => 'required',
        //     'gpssatellite' => 'required',
        //     'headlightcovers' => 'required',
        //     'leatherseats' => 'required',
        //     'leathertrim' => 'required',
        //     'dualfuel' => 'required',
        //     'roofdeflector' => 'required',
        //     'rearspoiler' => 'required',
        //     'tintedwindows' => 'required',
        //     'towbar' => 'required'
        // ]);
        $myarray=[];
        // dD($request->vehicledetail_id);
        foreach($request->all() as $key => $value) {
            if($key == "_token") continue;
            if($key == "vehicledetail_id") continue;
            $vehicle=  new VehicleFeatures();
            $vehicle->vehicledetail_id=$request->vehicledetail_id;
            $vehicle->feature_name =$key;
            $vehicle->save();
        }
        Session::flash('message', "Vehicle Features Added Successfully");
        return redirect()->route('webapp.submit3', $vehicle->vehicledetail_id);
    }
    /**
     * Implemenatation of Submit 3
     */
    public function addVehicleImages(Request $request, $id){
        $files = $request->vehicle_images;
        $comments = $request->comments;
        // Updating Vehicle Comments 
        $vehicleDetail = VehicleDetail::find($id);
        $vehicleDetail->comments = $comments;
        $vehicleDetail->save();

        $vehicleDetail = VehicleDetail::with('images')->find($id);
        if(!isset($files))
        {
            if(count($vehicleDetail->images) > 10){
                Session::flash('error', "Vehicle Images Cannot be uploaded more than 10 ");
                return redirect()->back()->with('error', "Cannot upload more than 10 images")->withErrors(['images' => 'Cannot upload more than 10 images']);
            }
            if(count($vehicleDetail->images) == 0){
                Session::flash('error', "Vehicle Images are mandatory");
                return redirect()->back()->with('error', "Car images is mandatory")->withErrors(['images' => 'Car images is mandatory']);
            }
            Session::flash('error', "Vehicle Images are mandatory");
            return redirect()->back()->with('error', "Car images is mandatory");
        }
        if(count($vehicleDetail->images) + count($files) > 10){
            return redirect()->back()->with('error', "Cannot upload more than 10 images");
        }
    
        // Making counting of uploaded images
        $file_count = count($files);
    
        // start count how many uploaded
        $uploadcount = 0;
    
        foreach($files as $file) {
            $destinationPath = public_path('vehicle_images');
            $filename = time().'.'.$file->getClientOriginalName();
            $filename = $this->getImageSlug($filename);
            $upload_success = $file->move($destinationPath, $filename);
            $vehicle=  new VehicleImages();
            $vehicle->vehicledetail_id=$request->vehicledetail_id;
            $vehicle->image_path = '/vehicle_images'.'/'.$filename;
            $vehicle->save();
            $uploadcount++;
        }


        Session::flash('message', "Vehicle Images Added Successfully");
        return redirect()->route('webapp.submit4', $vehicle->vehicledetail_id);
    }
    /**
     * Implemenatation of Submit 4
     */
    public function addVehicleContact(Request $request, $id){
        $validatedData = $request->validate([
            'vehicledetail_id' => 'required',
            'price' => 'required',
            'mileage' => 'required',
            'exterior_color' => 'required',
            'interior_color' => 'required',
            'seat_color' => 'required',
            'registered' => 'required',
            'registration_plate_number' => 'required',
            'registration_vehicle_number' => 'required',
            'registration_exiry_month' => 'required',
            'registration_exiry_year' => 'required',
            'vehicle_address' => 'required',
            'vehicle_city' => 'required',
            'vehicle_country' => 'required',
            'vehicle_phone' => 'required',
            'vehicle_email' => 'required'
        ]);
        $validatedData['registered'] = $request->registered =="true" ? 1 : 0;
        $request->registered =$validatedData['registered'];
        $vehicleContact = VehicleContact::where('vehicledetail_id' , '=' , $request->vehicledetail_id)->first();
        $vehicleDetail;
        if($vehicleContact == null){
            $vehicleDetail = VehicleContact::Create([
                'vehicledetail_id' => $request->vehicledetail_id,
                'price' => $request->price,
                'mileage' => $request->mileage,
                'exterior_color' => $request->exterior_color,
                'interior_color' => $request->interior_color,
                'seat_color' => $request->seat_color,
                'registered' => $request->registered,
                'registration_plate_number' => $request->registration_plate_number,
                'registration_vehicle_number' => $request->registration_vehicle_number,
                'registration_exiry_month' => $request->registration_exiry_month,
                'registration_exiry_year' => $request->registration_exiry_year,
                'vehicle_address' => $request->vehicle_address,
                'vehicle_city' => $request->vehicle_city,
                'vehicle_country' => $request->vehicle_country,
                'vehicle_phone' => $request->vehicle_phone,
                'vehicle_email' => $request->vehicle_email
            ]);
            Session::flash('message', "Ad contact has been created successfully");
        }
        else{
            // Order::find($thisOrderID)->update($thisOrder)
            $vehicleDetail = VehicleContact::where('vehicledetail_id' , '=' , $request->vehicledetail_id)->update($validatedData);
            Session::flash('message', "Ad contact has been updated successfully");
        }
        return redirect()->route('webapp.submit5', $request->vehicledetail_id);

    }
    public function publishVehicle(Request $request, $id){
        $validatedData = $request->validate([
            'car_title' => 'required'
        ]);
        $vehicleStatus = new PublishedVehicle();
        $vehicleStatus->vehicledetail_id = $id;
        $vehicleStatus->car_title = $request->car_title;
        $vehicleStatus->status = false;
        $vehicleStatus->plan = 'Basic';
        $vehicleStatus->payment = 'false';
        $vehicleStatus->payment_status = 'false';
        $vehicleStatus->payment_method = 'false';
        $vehicleStatus->save();
        return redirect()->route('webapp.home');
    }

    /***
     * helper Function
     */
    private function getImageSlug($string){
        $slug = trim($string); // trim the string
        $slug= preg_replace('/[^a-zA-Z0-9 .-]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
        $slug= str_replace(' ','-', $slug); // replace spaces by dashes
        $slug= strtolower($slug);  // make it lowercase
        return $slug;
    }
}
