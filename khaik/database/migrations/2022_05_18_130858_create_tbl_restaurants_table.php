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
            $table->id('restaurant_id');
            $table->unsignedBigInteger('owner_id');
            $table->string('restaurant_name',100);
            $table->text('restaurant_description');
            $table->string('restaurant_phonenumber',25);
            $table->string('restaurant_header_photo',100);
            $table->string('restaurant_profile_photo',100);
            $table->string('restaurant_addres',128);
            $table->string('restaurant_place',100);
            $table->string('restaurant_country',100);
            $table->string('restaurant_longitude',128);
            $table->string('restaurant_latitude',128);
            $table->text('restaurant_opening_time');
            $table->text('restaurant_closing_time');
            $table->string('restaurant_status_id');
            $table->unsignedBigInteger('restaurant_category_id');
            $table->string('restaurant_facebook_link',128);
            $table->text('restaurant_qr');
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
