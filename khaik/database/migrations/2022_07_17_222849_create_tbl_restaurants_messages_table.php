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
        Schema::create('tbl_restaurants_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->string('message_title', 128)->nullable();
            $table->string('message_body', 255)->nullable();
            $table->unsignedBigInteger('message_seen')->nullable();
            $table->timestamps();
        });

        Schema::table('tbl_restaurants_messages', function (Blueprint $table) {

            $table->foreign('restaurant_id')
                ->references('id')->on('tbl_restaurants')->onDelete('cascade');
        });

        Schema::table('tbl_restaurants_messages', function (Blueprint $table) {

            $table->foreign('sender_id')
                ->references('id')->on('tbl_admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_restaurants_messages');
    }
};
