<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataJurusan = [
            [
                'nama_jurusan' => 'Teknologi Informasi',
                'singkatan_jurusan' => 'TI',
            ],
            [
                'nama_jurusan' => 'Teknik Sipil',
                'singkatan_jurusan' => 'TS',
            ],
            [
                'nama_jurusan' => 'Teknik Elektro',
                'singkatan_jurusan' => 'TE',
            ],
            [
                'nama_jurusan' => 'Akutansi',
                'singkatan_jurusan' => 'AK',
            ],
            [
                'nama_jurusan' => 'Teknik Kimia',
                'singkatan_jurusan' => 'TK',
            ],
            [
                'nama_jurusan' => 'Teknik Mesin',
                'singkatan_jurusan' => 'TM',
            ],
            [
                'nama_jurusan' => 'Administrasi Niaga',
                'singkatan_jurusan' => 'AN',
            ],
        ];

        DB::table('jurusan')->insert($dataJurusan);
    }
}
