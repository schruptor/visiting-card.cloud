<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\Information;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    protected $model = Information::class;

    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'type' => $this->faker->word(),
            'value' => $this->faker->word(),
            'color' => $this->faker->boolean ? $this->faker->hexColor() : null,
        ];
    }
}
