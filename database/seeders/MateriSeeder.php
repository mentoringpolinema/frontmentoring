<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataMateri = [
            [
                'nama_materi' => 'Belajar Makhorijul Huruf',
                'link_materi' => 'https://www.youtube.com/watch?v=K57BYZbwcr8',
                'link_materi_embed' => 'https://www.youtube.com/embed/K57BYZbwcr8',
                'detail_materi' => 'Dilaksanakan Pukul 09.00 WIB',
                'slug' => 'belajar-makhorijul-huruf',
                'user_id' => 1,
                'kegiatan_id' => 2
            ],
            [
                'nama_materi' => 'Belajar Membaca Surat Pendek',
                'link_materi' => 'https://www.youtube.com/watch?v=obAfYylyXAM',
                'link_materi_embed' => 'https://www.youtube.com/embed/obAfYylyXAM',
                'detail_materi' => 'Batas Pengumpulan Tugas Pukul 15.00 WIB',
                'slug' => 'belajar-membaca-surat-pendek',
                'user_id' => 2,
                'kegiatan_id' => 4
            ]
            
        ];
        DB::table('materi')->insert($dataMateri);
    }
}
