<?php

namespace Database\Factories;

use App\Models\Events;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'location' => $this->faker->address,
            'date_time' => $this->faker->dateTime,
            'organiser_id' => $this->faker->organiser_id,
            'id' => $this->faker->id,
            'event_id' => $this->faker->event_id,
            'max_capacity' => $this->faker->randomNumber(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
