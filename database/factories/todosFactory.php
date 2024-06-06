<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class todosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientName'=> fake()->sentence(mt_rand(3,5)),
            'phone'=>fake()->text(),
            'email'=>fake()->realtext(400),
            'website'=>fake()->realtext(400),
            'city'=>fake()->realtext(400),
            'active'=>fake()->randomElement([true,folse]) ? now() : null,
           
           
        ]
    }
}
