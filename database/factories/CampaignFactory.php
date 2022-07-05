<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->uuid,
            'name' => $this->faker->company,
            'is_active' => 1,
            'start_at' => date('Y-m-d H:i:s'),
            'end_at' => $this->faker->dateTimeThisYear(),

        ];
    }
}
