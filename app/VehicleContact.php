<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleContact extends Model
{
    protected $table = "vehiclecontact";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'vehicledetail_id',
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'address',
        'city',
    ];
}
