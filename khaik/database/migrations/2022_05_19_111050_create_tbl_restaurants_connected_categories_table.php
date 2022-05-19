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
        Schema::create('tbl_restaurants_connected_categories', function (Blueprint $table) {
            $table->id('restaurants_categories_relation_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('restaurant_category_id');
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
        Schema::dropIfExists('tbl_restaurants_connected_categories');
    }
};
