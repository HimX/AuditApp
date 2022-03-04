<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuditPlanTypeFactory extends Factory
{
    const INITIAL_STATE = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->address(),
            'description' => $this->faker->text(),
            'default_flow_key' => $this->faker->randomElement(['standard', 'custom']),
            'state' => self::INITIAL_STATE
        ];
    }
}
