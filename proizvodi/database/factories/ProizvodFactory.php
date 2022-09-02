<?php

namespace Database\Factories;


use App\Models\Proizvod;
use App\Models\User;
use App\Models\Kategorija;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Proizvod::class;
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->word(),
            'opis' => $this->faker->paragraph(),
            'cena' => $this->faker->numberBetween(100, 1000),
            'rok' => $this->faker->date(),
            'user_id'=>User::factory(),
            'kategorija_id'=>Kategorija::factory()
        ];
    }
}
