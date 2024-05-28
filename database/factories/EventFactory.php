<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function users() {
        return once(
            function() {
                return User::pluck('id');
            }
        );
    }
    public function definition(): array
    {
        return [
            'user_id' => $this->users()->random(),
            'date' => fake()->dateTime(),
            'location' => fake()->address(),
            'modalidad' => fake()->randomElements(['Virtual','Presencial'])
        ];
    }
}
