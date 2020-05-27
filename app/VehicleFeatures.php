<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleFeatures extends Model
{
    protected $table = "vehiclefeatures";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'vehicledetail_id',
        'feature_name'
    ];
    public function getvehicleDetail(){
        return $this->belongsTo('VehicleDetail', 'id', 'vehicledetail_id');
    }
}
