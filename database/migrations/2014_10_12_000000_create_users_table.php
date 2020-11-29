<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('image_url')->default('');
            $table->string('linkedin')->default('');
            $table->string('facebook')->default('');
            $table->string('twitter')->default('');
            $table->string('experience')->default('');
            $table->string('description')->default('');
            $table->string('working')->default('');
            $table->string('mobile_number')->nullable();
            $table->string('email')->unique();
            $table->string('is_active')->default("true");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
