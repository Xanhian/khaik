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
            // Schema::table('tbl_restaurants', function (Blueprint $table) {
            
            //     $table->foreign('owner_id')
            //     ->references('owner_id')->on('tbl_restaurant_owners')->onDelete('cascade');

            //     $table->foreign('restaurant_status_id')
            //     ->references('restaurant_status_id')->on('tbl_restaurants_states')->onDelete('cascade');

            //     $table->foreign('restaurant_category_id')
            //     ->references('restaurant_category_id')->on('tbl_restaurants_categories')->onDelete('cascade');

            // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
