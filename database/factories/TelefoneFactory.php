<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefone>
 */
class TelefoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telefone'=>$this->faker->ean8(),
            'responsa'=>$this->faker->sentence(3),
            'local'=>$this->faker->sentence(3),
            'divisa'=>$this->faker->sentence(1),
            'secao'=>$this->faker->name
        ];
    }
}
