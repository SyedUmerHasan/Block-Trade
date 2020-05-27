<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclecontactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiclecontact', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("vehicledetail_id");
            $table->bigInteger("price");
            $table->bigInteger("mileage");
            $table->text("exterior_color");
            $table->text("interior_color");
            $table->text("seat_color");
            $table->boolean("registered");
            $table->text("registration_plate_number");
            $table->text("registration_vehicle_number");
            $table->text("registration_exiry_month");
            $table->text("registration_exiry_year");
            $table->text("vehicle_address");
            $table->text("vehicle_city");
            $table->text("vehicle_country");
            $table->text("vehicle_phone");
            $table->text("vehicle_email");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiclecontact');
    }
}
