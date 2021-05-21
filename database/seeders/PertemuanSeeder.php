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
                'mentor_id' => 1,
                'detail_pertemuan' => 'Wajib membawa Al Quran',
                'link_pertemuan' => 'https://meet.google.com/rqh-cwfi-tra',
                'kegiatan_id' => 3
            ],
            [
                'nama_pertemuan' => 'Tilawatil Quran',
                'mentor_id' => 2,
                'detail_pertemuan' => 'Wajib membawa Al Quran',
                'link_pertemuan' => 'https://meet.google.com/rqh-cwfi-tra',
                'kegiatan_id' => 4
            ]
            
        ];

        DB::table('pertemuan')->insert($dataPertemuan);
    }
}
