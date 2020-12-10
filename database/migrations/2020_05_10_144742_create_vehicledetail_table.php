<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicledetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('vehicledetail');
        Schema::create('vehicledetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->nullable();
            $table->bigInteger("carmanufacturer_id")->nullable();
            $table->bigInteger("carmodel_id")->nullable();
            $table->bigInteger("year_manufacture")->nullable();
            $table->text("body_type")->nullable();
            $table->text("number_seat")->nullable();
            $table->text("number_door")->nullable();
            $table->text("number_gear")->nullable();
            $table->text("tranmission_type")->nullable();
            $table->text("drive_type")->nullable();
            $table->text("engine_type")->nullable();
            $table->text("engine_capacity")->nullable();
            $table->text("fuel_type")->nullable();
            $table->text("chasis_number")->nullable();
            $table->text("car_title")->nullable();
            $table->text("description")->nullable();
            $table->bigInteger("price")->nullable();
            $table->boolean("isPublished")->default(false);
            $table->text("adType")->nullable();
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
        Schema::dropIfExists('vehicledetail');
    }
}
