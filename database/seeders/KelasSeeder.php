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
                'kelas' => 'MI-1A',
                'prodi_id' => 1,
            ],
            [
                'kelas' => 'TI-1A',
                'prodi_id' => 2,
            ],
            [
                'kelas' => 'TS-1A',
                'prodi_id' => 3,
            ],
            [
                'kelas' => 'MRK-1A',
                'prodi_id' => 4,
            ],
        ];

        DB::table('kelas')->insert($dataKelas);
    }
}
