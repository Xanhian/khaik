<?php

use App\Models\tbl_restaurants_category;
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
        Schema::create('tbl_restaurants_categories', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_category_name', 100);
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'BBQ',
            ],
            [
                'name' => 'Javanese',
            ],
            [
                'name' => 'House Food',
            ],
            [
                'name' => 'Indian',
            ],
            [
                'name' => 'Vegan',
            ],
            [
                'name' => 'Fast Food',
            ],
        );
        foreach ($data as $datum) {
            $category = new tbl_restaurants_category(); //The Category is the model for your migration
            $category->restaurant_category_name = $datum['name'];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_restaurants_categories');
    }
};
