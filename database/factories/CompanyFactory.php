<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'post_code' => $this->faker->postcode,
            'address' => $this->faker->streetAddress,
            'tel' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'ceo_name' => $this->faker->userName,
            'stuff_name' => $this->faker->userName,
            'note' => $this->faker->optional(0.4)->realText,
        ];
    }
}
