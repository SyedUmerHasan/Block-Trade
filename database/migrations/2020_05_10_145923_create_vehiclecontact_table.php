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
        Schema::dropIfExists('vehiclecontact');
        Schema::create('vehiclecontact', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("vehicledetail_id");
            $table->text("first_name");
            $table->text("last_name");
            $table->text("email_address");
            $table->text("phone_number");
            $table->text("address");
            $table->text("city");
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
