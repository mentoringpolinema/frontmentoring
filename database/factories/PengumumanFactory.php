<?php

namespace Database\Factories;

use App\Models\Pengumuman;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PengumumanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengumuman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dataStatus = ['Progress', 'Selesai'];
        return [
            'judul_pengumuman' => $this->faker->sentence,
            'tagline_pengumuman' => 'mentoring',
            'status_pengumuman' => Arr::random($dataStatus),
            'detail_pengumuman' => $this->faker->sentence,
        ];
    }
}
