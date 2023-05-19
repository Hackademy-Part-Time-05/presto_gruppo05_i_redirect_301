<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(50),
            // 'email' => $this->faker->unique()->safeEmail(),
            'body' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(10, 1000),
            'category_id' => $this->faker->numberBetween(1,10),
            'user_id' => 1,
        ];
    }
}
