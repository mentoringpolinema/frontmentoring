<?php

namespace Database\Factories;

use App\Models\Angkatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngkatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Angkatan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {   
        static $tahun = 2020;
        return [
            'angkatan' => $tahun++,
        ];
    }
}
