<?php

namespace Database\Factories;

use App\Models\Prezentacija;
use Illuminate\Database\Eloquent\Factories\Factory;


class PrezentacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Prezentacija::class;
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'mesto' => $this->faker->word(),
            'vreme' => $this->faker->time(),
            'url' => $this->faker->url(),
        
        ];
    }
}
