<?php

namespace Database\Factories;

use App\Models\LivreOr;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreOrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivreOr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->firstName,
            'texte'=> $this->faker->text(100),
            'note'=> $this->faker->numberBetween(1,5),

        ];
    }
}
