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
    
    public function features(){
        return $this->hasMany('App\VehicleFeatures', 'vehicledetail_id', 'vehicledetail_id');
    }
    public function details(){
        return $this->hasOne('App\VehicleDetail', 'id', 'vehicledetail_id');
    }
    public function images(){
        return $this->hasMany('App\VehicleImages', 'vehicledetail_id', 'vehicledetail_id');
    }
    public function contact(){
        return $this->hasOne('App\VehicleContact', 'vehicledetail_id', 'vehicledetail_id');
    }
    public function brands(){
        return $this->belongsTo('App\CarManufacturer', 'brandmodel_id', 'vehicledetail_id');
    }
    public function model(){
        return $this->belongsTo('App\BrandModel', 'vehiclebrand_id', 'vehicledetail_id');
    }

}
