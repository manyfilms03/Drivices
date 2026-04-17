<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nome' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'senha' => bcrypt('secret'), 
        'cpf' => fake()->numerify('###########'), 
        'nascimento' => fake()->date(),
        'telefone' => fake()->numerify('###########'),
        'foto' => 'profile.jpg',
        'tipo' => fake()->randomElement(['cliente', 'profissional']),
        'status' => 'ativo',
        'email_verificado' => 'sim',
        'email_codigo' => fake()->numerify('######'),
    ];
}
}
