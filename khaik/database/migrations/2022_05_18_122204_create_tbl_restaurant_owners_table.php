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
        Schema::create('tbl_restaurant_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->string('password');
            $table->string('phonenumber', 25);
            $table->string('email', 100)->unique();
            $table->string('firebase_token')->nullable();

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
        Schema::dropIfExists('tbl_restaurant_owners');
    }
};
