<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKelas = [
            [
                'kelas' => '1A',
                'prodi_id' => 1,
            ],
            [
                'kelas' => '1A',
                'prodi_id' => 2,
            ],
        ];

        DB::table('kelas')->insert($dataKelas);
    }
}
