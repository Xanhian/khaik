<?php

namespace Database\Factories;

use App\Models\tbl_restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_restaurant>
 */
class tbl_restaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = tbl_restaurant::class;
    public function definition()
    {
        return [
            'restaurant_name' => $this->faker->firstName(),
            'restaurant_description' => $this->faker->text,
            'password' => $this->faker->text,
            'phonenumber' => $this->faker->randomNumber(5, true),
            'email' => $this->faker->safeEmail,
        ];
    }
}
