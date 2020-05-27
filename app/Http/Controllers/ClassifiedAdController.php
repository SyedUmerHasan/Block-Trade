<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;
use App\VehicleContact;
use App\InteriorColor;
use App\ExteriorColor;
use Session;

class ClassifiedAdController extends Controller
{
    public function index(){
        return view('webapp.pages.main_home');
    }
    public function submit1(){
        return view('webapp.pages.submit1');
    }

    public function submit2($id){
        $vehicleDetail = VehicleDetail::find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        $vehicleFeature = VehicleFeatures::where('vehicledetail_id' , '=' , $vehicleDetail->id)->first();
        return view('webapp.pages.submit2')->with(compact('vehicleDetail'))
                                            ->with(compact('vehicleFeature'));

    }
    
    public function submit3($id){
        $vehicleDetail = VehicleDetail::find($id);
        if($vehicleDetail == null){
            return redirect()->route('webapp.submit1');
        }
        return view('webapp.pages.submit3')->with(compact('vehicleDetail'));
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
        $validatedData = $request->validate([
            'users_id' => 'required',
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
            'chasis_number' => 'required'
        ]);
        $vehicleDetail = VehicleDetail::create([
            'users_id' => $request->users_id,
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
