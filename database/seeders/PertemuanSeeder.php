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
            'nama_pertemuan' => 'Materi',
            'mentor_id' => 1,
            'minggu_pertemuan' => 1,
            'tanggal_pertemuan' => '2020-03-12',
            'detail_pertemuan' => 'Jam 08:00 Sampai selesai yaaa',
            'link_pertemuan' => 'https://www.youtube.com/watch?v=_jEkvAHLbp0'
        ];

        DB::table('pertemuan')->insert($dataPertemuan);
    }
}
