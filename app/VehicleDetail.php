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
    public function getallvehiclefeatures(){
        return $this->hasMany('App\VehicleFeatures', 'vehicledetail_id', 'id');
    }
    public function getallvehicleimages(){
        return $this->hasMany('App\VehicleImages', 'vehicledetail_id', 'id');
    }
    public function getvehiclecontactdetails(){
        return $this->hasMany('App\VehicleContact', 'vehicledetail_id', 'id');
    }
}
