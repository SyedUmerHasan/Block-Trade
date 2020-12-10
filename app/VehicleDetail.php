<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    protected $table = "vehicledetail";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'user_id',
        'carmanufacturer_id',
        'carmodel_id',
        'year_manufacture',
        'body_type',
        'number_seat',
        'number_door',
        'number_gear',
        'tranmission_type',
        'drive_type',
        'engine_type',
        'engine_capacity',
        'fuel_type',
        'chasis_number',
        'car_title',
        'description',
        'price',
        'isPublished',
        'adType'
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
    public function manufacturer(){
        return $this->belongsTo('App\CarManufacturer', 'carmanufacturer_id', 'id');
    }
    public function model(){
        return $this->belongsTo('App\CarModel', 'carmodel_id', 'id');
    }
}
