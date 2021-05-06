<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CetakBuktiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataCetakBukti = [
            'kode_cetak' => 'CB853418217',
            'mentee_id' => '1',
            'status_cetak' => 'Accept',
        ];
        DB::table('cetak_bukti')->insert($dataCetakBukti);
    }
}
