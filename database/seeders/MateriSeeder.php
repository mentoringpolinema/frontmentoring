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
            'nama_materi' => 'Belajar Mengaji',
            'link_materi' => 'https://www.youtube.com/watch?v=_jEkvAHLbp0',
            'link_materi_embed' => 'https://youtube.com/embed/_jEkvAHLbp0',
            'minggu_materi' => 1,
            'detail_materi' => 'Jam 08:00 sampai selesai yaaaa....',
            'slug' => 'belajar-mengaji'
        ];
        DB::table('materi')->insert($dataMateri);
    }
}
