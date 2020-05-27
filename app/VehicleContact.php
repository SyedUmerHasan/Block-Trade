<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleContact extends Model
{
    protected $table = "vehiclecontact";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'vehicledetail_id',
        'price',
        'mileage',
        'exterior_color',
        'interior_color',
        'seat_color',
        'registered',
        'registration_plate_number',
        'registration_vehicle_number',
        'registration_exiry_month',
        'registration_exiry_year',
        'vehicle_address',
        'vehicle_city',
        'vehicle_country',
        'vehicle_phone',
        'vehicle_email'
        ];
}
