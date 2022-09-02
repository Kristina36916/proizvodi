<?php

namespace Database\Factories;

use App\Models\Kategorija;
use App\Models\Prezentacija;
use Illuminate\Database\Eloquent\Factories\Factory;




class KategorijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Kategorija::class;
    
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->word(),
            'opis' => $this->faker->paragraph(),
            'prezentacija_id'=>Prezentacija::factory()->create()
        ];
    }
}
