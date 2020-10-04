<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VehicleDetail;
use App\VehicleFeatures;
use App\VehicleImages;



class PublishedVehicle extends Model
{
    protected $table = "vehicle_status";
    protected $primaryKey = "id";
    

    public function VehicleDetail(){
        return $this->hasOne('App\VehicleDetail', 'id', 'car_id');
    }
    public function VehicleFeatures(){
        return $this->hasMany('App\VehicleFeatures', 'vehicledetail_id', 'car_id');
    }
    public function VehicleImages(){
        return $this->hasMany('App\VehicleImages', 'vehicledetail_id', 'car_id');
    }
    public function VehicleContact(){
        return $this->hasOne('App\VehicleContact', 'vehicledetail_id', 'car_id');
    }


}
