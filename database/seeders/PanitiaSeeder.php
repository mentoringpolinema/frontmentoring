<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $dataPanitia = [
            'user_id' => 1,
            'nama_panitia' => $faker->name,
        ];

        DB::table('panitia')->insert($dataPanitia);
    }
}
