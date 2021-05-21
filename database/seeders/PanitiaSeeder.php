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
        // $faker = Faker::create('id_ID');
        $dataPanitia = [
            [
                'user_id' => 1,
                'nama_panitia' => 'A. Yahya Hudan Permana',
                'status_panitia' => 'aktif'
            ],
            [
                'user_id' => 4,
                'nama_panitia' => 'Irfak Wahyudi',
                'status_panitia' => 'aktif'
            ]
            
        ];

        DB::table('panitia')->insert($dataPanitia);
    }
}
