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
}
