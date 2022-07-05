<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'full_name' => $this->faker->name(),
            'nick_name' => $this->faker->firstName,
            'telephone_number' => $this->faker->tollFreePhoneNumber,
            'remark' => '',
            'is_active' => true
        ];
    }
}
