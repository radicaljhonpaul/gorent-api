<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::pluck('id')->all();

        return [
            'first_name' => fake()->randomElement([fake()->firstNameMale(), fake()->firstNameFemale()]),
            'last_name' => fake()->lastName(),
            'registration_date' => fake()->dateTimeBetween('2023-01-01', '2023-03-31')->format('Y-m-d'),
            'date_of_birth' => fake()->dateTimeBetween('1990-01-01', '2005-12-31')->format('Y-m-d'),
            'phone_number' => '09125978705',
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'user_id' => fake()->randomElement($users),
        ];
    }
}
