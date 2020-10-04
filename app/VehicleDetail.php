<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    protected $table = "vehicledetail";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'users_id', 
        "vehiclebrand_id", 
        "brandmodel_id", 
        "body_type", 
        "number_seat", 
        'number_door', 
        'number_gear',
        'tranmission_type',
        'drive_type',
        "engine_type", 
        "number_cylinder", 
        "engine_capacity", 
        'fuel_type', 
        'chasis_number'
    ];
    public function features(){
        return $this->hasMany('App\VehicleFeatures', 'vehicledetail_id', 'id');
    }
    public function images(){
        return $this->hasMany('App\VehicleImages', 'vehicledetail_id', 'id');
    }
    public function contact(){
        return $this->hasMany('App\VehicleContact', 'vehicledetail_id', 'id');
    }
    public function brands(){
        return $this->belongsTo('App\CarManufacturer', 'brandmodel_id', 'id');
    }
    public function model(){
        return $this->belongsTo('App\BrandModel', 'vehiclebrand_id', 'id');
    }
    public function car(){
        return $this->belongsTo('App\PublishedVehicle', 'id', 'car_id');
    }
}
