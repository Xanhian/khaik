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
        Schema::table('tbl_restaurants', function (Blueprint $table) {
            
            $table->foreign('owner_id')
            ->references('owner_id')->on('tbl_restaurant_owners')->onDelete('cascade');
        
        });

        Schema::table('tbl_restaurants_connected_categories', function (Blueprint $table) {
            
            $table->foreign('restaurant_id','restaurant_connection')
            ->references('restaurant_id')->on('tbl_restaurants')->onDelete('cascade');

            $table->foreign('restaurant_category_id','category_connecetion')
            ->references('restaurant_category_id')->on('tbl_restaurants_categories')->onDelete('cascade');
         
        
        });

        Schema::table('tbl_articles', function (Blueprint $table) {
            
            $table->foreign('restaurant_id')
            ->references('restaurant_id')->on('tbl_restaurants')->onDelete('cascade');

            $table->foreign('article_category_id')
            ->references('category_id')->on('tbl_article_categories')->onDelete('cascade');
        
        });

        Schema::table('tbl_article_prices', function (Blueprint $table) {
            
            $table->foreign('article_id')
            ->references('article_id')->on('tbl_articles')->onDelete('cascade');
        
        });

        Schema::table('tbl_restaurants_deals', function (Blueprint $table) {
            
            $table->foreign('restaurant_id')
            ->references('restaurant_id')->on('tbl_restaurants')->onDelete('cascade');

        });

        Schema::table('tbl_users_favorites', function (Blueprint $table) {
            
            $table->foreign('restaurant_id')
            ->references('restaurant_id')->on('tbl_restaurants')->onDelete('cascade');

            $table->foreign('user_id')
            ->references('user_id')->on('tbl_users')->onDelete('cascade');

            $table->foreign('favorite_status_id')
            ->references('favorite_status_id')->on('tbl_favorite_statuses')->onDelete('cascade');

        });

        Schema::table('tbl_article_likes', function (Blueprint $table) {
            
      

            $table->foreign('user_id')
            ->references('user_id')->on('tbl_users')->onDelete('cascade');

            $table->foreign('article_id')   
            ->references('article_id')->on('tbl_articles')->onDelete('cascade');

        });
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