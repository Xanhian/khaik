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
        Schema::create('tbl_article_prices', function (Blueprint $table) {
            $table->id('article_price_id');
            $table->unsignedBigInteger('article_id');
            $table->integer('article_price_number');
            $table->string('article_price_currency',100);   
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
        Schema::dropIfExists('tbl_article_prices');
    }
};
