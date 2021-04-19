<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Faker\Factory as Faker;

class MenteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $namaMentee = $faker->name;
        $dataMentee = [
            'user_id' => 2,
            'nim_mentee' => $faker->numerify('##########'),
            'nama_mentee' => $namaMentee,
            'kelas_id' => 1,
            'kelompok_id' => 1,
            'angkatan_id' => 1,
            'status_mentee' => 'aktif',
        ];

        DB::table('mentee')->insert($dataMentee);
    }
}
