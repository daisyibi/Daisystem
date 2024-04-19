<?php
namespace Database\Factories;

use App\Models\Networking;
use Illuminate\Database\Eloquent\Factories\Factory;

class NetworkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'desired_company' => $this->faker->company,
            'salary_expectation' => $this->faker->numberBetween(30000, 100000),
            'work_experience' => $this->faker->numberBetween(1, 20),
            'skills' => $this->faker->words(5, true),
            'degree' => $this->faker->sentence,
            'user_id' => $this->faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
