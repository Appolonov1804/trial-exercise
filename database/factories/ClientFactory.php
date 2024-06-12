<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition(): array
    {
        return [
           'phone_number' => $this->faker->unique()->phoneNumber,
            'full_name' => $this->faker->name,
            'accumulated_points' => $this->faker->numberBetween(1, 100)
        ];
    }
}
