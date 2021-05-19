<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataPengumuman = [
            [
                'judul_pengumuman' => 'Pengambilan Sertifikat Mentoring',
                'tagline_pengumuman' => 'Pengambilan Sertifikat',
                'status_pengumuman' => 'Coming Soon',
                'detail_pengumuman' => 'Jadwal pengambilan sertifikat dibagi sesuai kelompok masing-masing',
            ],
            [
                'judul_pengumuman' => 'Opening Mentoring 2021',
                'tagline_pengumuman' => 'Opening Mentoring',
                'status_pengumuman' => 'Selesai',
                'detail_pengumuman' => 'Dilaksanakan pada tanggal 28 April 2021',
            ],
            [
                'judul_pengumuman' => 'Closing Mentoring 2021',
                'tagline_pengumuman' => 'Closing Mentoring',
                'status_pengumuman' => 'On Going',
                'detail_pengumuman' => 'Dilaksanakan pada tanggal 1 Juni 2021',
            ]
        ];
        
            

        DB::table('pengumuman')->insert($dataPengumuman);
    }
}
