<?php

namespace Database\Factories;

use App\Models\AuditPlanType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'objective' => $this->faker->text(300),
            'scope' => $this->faker->text(300),
            'description' => $this->faker->text(300),
            'start_date' => $this->faker->dateTimeBetween('-1 years'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 years'),
            'type_id' => AuditPlanType::factory()
        ];
    }
}
