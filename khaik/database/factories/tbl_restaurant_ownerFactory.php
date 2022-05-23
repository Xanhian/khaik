<?php

namespace Database\Factories;

use App\Models\tbl_restaurant_owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_restaurant_owner>
 */
class tbl_restaurant_ownerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = tbl_restaurant_owner::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastname(),
            'password' => $this->faker->text,
            'phonenumber' => $this->faker->randomNumber(5, true),
            'email' => $this->faker->safeEmail,
        ];
    }
}
