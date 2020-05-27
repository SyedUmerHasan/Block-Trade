<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleImages extends Model
{
    protected $table = "vehicleimage";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'vehicledetail_id',
        'image_path'
    ];
}
