<?php

namespace Database\Factories;

use App\Models\UserProfiles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class UserProfilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'bio' => $this->faker->paragraph,
            'contact_information' => $this->faker->phoneNumber,
            'preferences' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
