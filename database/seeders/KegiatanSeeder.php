<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKegiatan = [
            [
                'nama_kegiatan' => 'Opening Mentoring tahun 2020',
                'jenis_kegiatan' => 'Opening Mentoring',
                'minggu_kegiatan' => 1,
                'tanggal_kegiatan' => '2020-03-21',
                "detail_kegiatan" => 'dilaksanakan pada pukul 08:00'
            ],
            [
                'nama_kegiatan' => 'Belajar Tajwid',
                'jenis_kegiatan' => 'Pertemuan',
                'minggu_kegiatan' => 2,
                'tanggal_kegiatan' => '2020-03-28',
                "detail_kegiatan" => 'dilaksanakan pada pukul 08:00'
            ],
            [
                'nama_kegiatan' => 'Closing Mentoring tahun 2020',
                'jenis_kegiatan' => 'Closing Mentoring',
                'minggu_kegiatan' => 10,
                'tanggal_kegiatan' => '2020-05-21',
                "detail_kegiatan" => 'dilaksanakan pada pukul 08:00'
            ],
        ];

        DB::table('kegiatan')->insert($dataKegiatan);
    }
}
