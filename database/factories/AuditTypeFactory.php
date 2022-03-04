<?php

namespace Database\Factories;

use App\Models\AuditPlanType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditTypeFactory extends Factory
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
            'name' => $this->faker->text(50),
            'description' => $this->faker->text(300),
            'plan_type_id' => AuditPlanType::factory(),
            'state' => 1
        ];
    }
}
