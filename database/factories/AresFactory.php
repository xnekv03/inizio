<?php

namespace Database\Factories;

use App\Models\Ares;
use Illuminate\Database\Eloquent\Factories\Factory;

class AresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ares::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ico'=>random_int(11111111,99999999),
            'name'=>$this->faker->company(),
            'street'=>$this->faker->streetAddress(),
            'town'=>$this->faker->city(),
            'zip'=>$this->faker->postcode(),
        ];
    }
}
