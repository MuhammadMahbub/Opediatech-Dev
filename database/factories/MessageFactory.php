<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "fname" => $this->faker->randomDigit(1),
            "fname" => $this->faker->name(3),
            "lname" => $this->faker->name(3),
            "email" => $this->faker->email(),
            "phone" => $this->faker->phoneNumber(10),
            "message" => $this->faker->text(15),
        ];
    }
}
