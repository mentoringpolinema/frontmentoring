<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MenteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // $namaMentee = $faker->name;
        $dataMentee = [
            [
                'user_id' => 3,
                'nim_mentee' => 1831710116,
                'nama_mentee' => 'Ismail Bin Mail',
                'kelas_id' => 1,
                'kelompok_id' => 1,
                'angkatan_id' => 1,
                'slug' => Str::slug('ismail-bin-mail'),
            ],
            [
                'user_id' => 6,
                'nim_mentee' => 1831710056,
                'nama_mentee' => 'Wahyuning Setyaningsih',
                'kelas_id' => 2,
                'kelompok_id' => 2,
                'angkatan_id' => 1,
                'slug' => Str::slug('wahyuning-setyaningsih'),
            ]
           
        ];

        DB::table('mentee')->insert($dataMentee);
    }
}
