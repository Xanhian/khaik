<?php

namespace Database\Factories;

use App\Models\tbl_user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_user>
 */
class tbl_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = tbl_user::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'lastname' => $this->faker->unique()->word,
            'password' => $this->faker->text,
            'phonenumber' => $this->faker->randomNumber(5, true),
            'email' => $this->faker->safeEmail,
        ];
    }
}
