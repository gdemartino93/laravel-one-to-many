<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => fake() -> e164PhoneNumber(),
            'address' => fake() -> streetAddress(),
            'avatar' => fake() -> image(360, 360, 'animals', true, 'dogs', true)
        ];
    }
}
