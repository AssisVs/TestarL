<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Veiculo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VeiculoFactory extends Factory
{
    protected $model = Veiculo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

           'placa' => $this->faker->name(),
            'status' => $this->faker->name(),
            'alocado_em' => $this->faker->name(),
            'liberado_em' => $this->faker->lastName(),
        ];
    }
}
