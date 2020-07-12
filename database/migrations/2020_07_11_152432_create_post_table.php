<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('heading');
            $table->string('category');
            $table->string('image');
            $table->bigInteger('crowd_price')->default(0);
            $table->bigInteger('recieved_crowd_price')->default(0);
            $table->text('details');
            $table->bigInteger('like_count')->default(0);
            $table->bigInteger('share_count')->default(0);
            $table->string('user_id');
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
        Schema::dropIfExists('post');
    }
}
