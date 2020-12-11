<?php

namespace App\Http\Controllers;

use App\VehicleContact;
use App\VehicleDetail;
use App\VehicleImages;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    public function carInformation(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'car_title' => 'required',
            'description' => 'required',
            'make' => 'required',
            'model' => 'required',
            'condition' => 'required',
            'body_type' => 'required',
            'transmission' => 'required',
            'drivetype' => 'required',
            'fueltype' => 'required',
            'yearmanufacturer' => 'required',
            'exteriorcolor' => 'required',
            'mileage' => 'required',
            'chasis_number' => 'required',
            'engine_capacity' => 'required',
        ]);

        $vehicleDetail = VehicleDetail::create([
            'user_id' => Auth::user()->id,
            'carmanufacturer_id' => $request->make,
            'carmodel_id' => $request->model,
            'year_manufacture' => $request->yearmanufacturer,
            'body_type' => $request->body_type,
            'number_seat' => "",
            'number_door' => "",
            'number_gear' => "",
            'tranmission_type' => $request->transmission,
            'drive_type' => $request->drivetype,
            'engine_type' => $request->engine_type,
            'engine_capacity' => $request->engine_capacity,
            'fuel_type' => $request->fueltype,
            'chasis_number' => $request->chasis_number,
            'car_title' => $request->car_title,
            'description' => $request->description,
            'price' => $request->price,
            'isPublished' => false,
            'adType' => 'basic',
        ]);
        

        $files = $request->vehicle_images;
        $vehicleDetail = VehicleDetail::with('images')->find($vehicleDetail->id);
        if($files == null)
        {
            if(count($vehicleDetail->images) > 10){
    
                Session::flash('error', "Vehicle Images Cannot be uploaded more than 10 ");
                return redirect()->to(route('add-product.create',['id'=>$vehicleDetail->id]). '#step-one')->with('error', "Cannot upload more than 10 images")->withErrors(['images' => 'Cannot upload more than 10 images'])->withInput();
            }
            if(count($vehicleDetail->images) == 0){
                
                Session::flash('error', "Vehicle Images are mandatory");
                return redirect()->to(route('add-product.create',['id'=>$vehicleDetail->id]). '#step-one')->with('error', "Car images is mandatory")->withErrors(['images' => 'Car images is mandatory'])->withInput();
            }
            
            Session::flash('message', "Vehicle Images Added Successfully");
            return redirect()->to(route('add-product.create',['id'=>$vehicleDetail->id]). '#step-one')->route('vehicle.contact', $vehicleDetail->id)->withInput();
        }
        $dbimagecount = $vehicleDetail->images;
        if(sizeof($dbimagecount) + count($files) > 10){
            return redirect()->to(route('add-product.create',['id'=>$vehicleDetail->id]). '#step-one')->with('error', "Cannot upload more than 10 images")->withInput();
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
            $vehicle->vehicledetail_id=$vehicleDetail->id;
            $vehicle->image_path = '/vehicle_images'.'/'.$filename;
            $vehicle->save();
            $uploadcount++;
        }
        Session::flash('message', "Vehicle Images Added Successfully");

        return redirect()->to(route('add-product.create',['id'=>$vehicleDetail->id]). '#step-two')->withInput();
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

    public function carContactDetails(Request $request){
        $validatedData = $request->validate([
            'vehicledetail_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);
        $vehicleContact = VehicleContact::Create([
            'vehicledetail_id' => $request->vehicledetail_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'city' => $request->city,
        ]);
        return redirect()->route('dashboard');
        
    }
}
