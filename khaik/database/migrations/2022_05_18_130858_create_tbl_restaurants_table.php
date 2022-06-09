<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_restaurants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('restaurant_name', 100);
            $table->text('restaurant_description');
            $table->string('restaurant_phonenumber', 25);
            $table->string('restaurant_header_photo', 100);
            $table->string('restaurant_addres', 128);
            $table->string('restaurant_place', 100);
            $table->string('restaurant_country', 100);
            $table->string('restaurant_longitude', 128)->nullable();
            $table->string('restaurant_latitude', 128)->nullable();
            $table->text('restaurant_opening_time')->nullable();
            $table->text('restaurant_closing_time')->nullable();
            $table->string('restaurant_facebook_link', 128)->nullable();
            $table->text('restaurant_qr');
            $table->unsignedBigInteger('restaurant_complete_status')->nullable();
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
        Schema::dropIfExists('tbl_restaurants');
    }
};
