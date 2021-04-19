<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKelompok = [
            'nama_kelompok' => 2,
            'mentor_id' => 1,
            'materi_id' => 1,
        ];

        DB::table('kelompok')->insert($dataKelompok);
    }
}
