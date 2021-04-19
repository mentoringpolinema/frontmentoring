<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataProdi = [
            [
                'nama_prodi' => 'D3 Manajemen Informatika',
                'singkatan_prodi' => 'MI',
                'jurusan_id' => 1
            ],
            [
                'nama_prodi' => 'D4 Teknik Informatika',
                'singkatan_prodi' => 'TI',
                'jurusan_id' => 1
            ],
            [
                'nama_prodi' => 'D3 Teknik Sipil',
                'singkatan_prodi' => 'TS',
                'jurusan_id' => 2
            ],
            [
                'nama_prodi' => 'D4 Manajemen Rekayasa Konstruksi',
                'singkatan_prodi' => 'MRK',
                'jurusan_id' => 2
            ],
            [
                'nama_prodi' => 'D3 Teknologi Konstruksi Jalan, Jembatan, dan Bangungan Air',
                'singkatan_prodi' => 'TKJJBA',
                'jurusan_id' => 2
            ],
            [
                'nama_prodi' => 'D3 Teknik Listrik',
                'singkatan_prodi' => 'TL',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D3 Teknik Elektronika',
                'singkatan_prodi' => 'TE',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D3 Teknik Telekomunikasi',
                'singkatan_prodi' => 'TT',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D4 Sistem Kelistrikan',
                'singkatan_prodi' => 'SKL',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D4 Teknik Elektronika',
                'singkatan_prodi' => 'TE',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D4 Jaringan Telekomunikasi Digital',
                'singkatan_prodi' => 'JTD',
                'jurusan_id' => 3
            ],
            [
                'nama_prodi' => 'D4 Akutansi Manajemen',
                'singkatan_prodi' => 'AM',
                'jurusan_id' => 4
            ],
            [
                'nama_prodi' => 'D4 Keuangan',
                'singkatan_prodi' => 'KEU',
                'jurusan_id' => 4
            ],
            [
                'nama_prodi' => 'D3 Akutansi',
                'singkatan_prodi' => 'AKT',
                'jurusan_id' => 4
            ],
            [
                'nama_prodi' => 'D3 Teknik Kimia',
                'singkatan_prodi' => 'TK',
                'jurusan_id' => 5
            ],
            [
                'nama_prodi' => 'D4 Teknik Kimia Industri',
                'singkatan_prodi' => 'TKI',
                'jurusan_id' => 5
            ],
            [
                'nama_prodi' => 'D4 Teknik Otomotif Elektronik',
                'singkatan_prodi' => 'TOE',
                'jurusan_id' => 6
            ],
            [
                'nama_prodi' => 'D3 Teknik Mesin',
                'singkatan_prodi' => 'TM',
                'jurusan_id' => 6
            ],
            [
                'nama_prodi' => 'D4 Teknik Mesin Produksi dan Perawatan',
                'singkatan_prodi' => 'TMPP',
                'jurusan_id' => 6
            ],
            [
                'nama_prodi' => 'D4 Manajemen Pemasaran',
                'singkatan_prodi' => 'MP',
                'jurusan_id' => 7
            ],
            [
                'nama_prodi' => 'D3 Administrasi Bisnis',
                'singkatan_prodi' => 'AB',
                'jurusan_id' => 7
            ],
            [
                'nama_prodi' => 'D3 Bahasa Inggris',
                'singkatan_prodi' => 'BING',
                'jurusan_id' => 7
            ],
        ];

        DB::table('prodi')->insert($dataProdi);
    }
}
