<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataPertemuan = [
            [
                'nama_pertemuan' => 'Membaca Al Quran',
                'mentor_id' => 2,
                'tanggal_pertemuan' => '2020-03-12',
                'detail_pertemuan' => 'Wajib menbawa Al Quran',
                'link_pertemuan' => 'https://meet.google.com/rqh-cwfi-tra',
                'status_pertemuan' => 'Open',
                'kegiatan_id' => 3
            ],
            [
                'nama_pertemuan' => 'Tilawatil Quran',
                'mentor_id' => 2,
                'tanggal_pertemuan' => '2020-03-12',
                'detail_pertemuan' => 'Wajib menbawa Al Quran',
                'link_pertemuan' => 'https://meet.google.com/rqh-cwfi-tra',
                'status_pertemuan' => 'Closed',
                'kegiatan_id' => 4
            ]
            
        ];

        DB::table('pertemuan')->insert($dataPertemuan);
    }
}
