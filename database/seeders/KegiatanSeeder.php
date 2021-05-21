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
                'id_kegiatan' => 1,
                'nama_kegiatan' => 'Opening Mentoring tahun 2020',
                'jenis_kegiatan' => 'Opening Mentoring',
                'minggu_kegiatan' => 1,
                'tanggal_kegiatan' => '2020-03-21',
                'status_kegiatan' => 'Open',
                "detail_kegiatan" => 'Dimulai Pukul 08.00 WIB'
            ],
            [
                'id_kegiatan' => 2,
                'nama_kegiatan' => 'Belajar Makhorijul Huruf',
                'jenis_kegiatan' => 'Materi',
                'minggu_kegiatan' => 2,
                'tanggal_kegiatan' => '2020-03-28',
                'status_kegiatan' => 'Closed',
                "detail_kegiatan" => 'Pahami video yang disajikan'
            ],
            [
                'id_kegiatan' => 3,
                'nama_kegiatan' => 'Membaca Al Quran',
                'jenis_kegiatan' => 'Pertemuan',
                'minggu_kegiatan' => 3,
                'tanggal_kegiatan' => '2020-05-21',
                'status_kegiatan' => 'Open',
                "detail_kegiatan" => 'Dilaksanakan pada pukul 08.00 WIB'
            ],
            [
                'id_kegiatan' => 4,
                'nama_kegiatan' => 'Belajar Membaca Surat Pendek',
                'jenis_kegiatan' => 'Materi',
                'minggu_kegiatan' => 4,
                'tanggal_kegiatan' => '2020-05-21',
                'status_kegiatan' => 'Closed',
                "detail_kegiatan" => 'Pahami dan praktekkan dengan membuka Al Quran'
            ],
            [
                'id_kegiatan' => 5,
                'nama_kegiatan' => 'Tilawatil Quran',
                'jenis_kegiatan' => 'Pertemuan',
                'minggu_kegiatan' => 5,
                'tanggal_kegiatan' => '2020-05-21',
                'status_kegiatan' => 'Open',
                "detail_kegiatan" => 'Dilaksanakan pada pukul 09.00 WIB'
            ],
        ];

        DB::table('kegiatan')->insert($dataKegiatan);
    }
}
