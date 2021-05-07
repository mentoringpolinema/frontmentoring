<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angkatan;
use App\Models\Pengumuman;
use App\Models\Pertemuan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Angkatan::factory(1)->create();
        Pengumuman::factory(100)->create();

        $this->call([
            JurusanSeeder::class,
            ProdiSeeder::class,
            KelasSeeder::class,
            UserSeeder::class,
            PanitiaSeeder::class,
            MentorSeeder::class,
            MateriSeeder::class,
            KelompokSeeder::class,
            MenteeSeeder::class,
            PertemuanSeeder::class,
            KegiatanSeeder::class,
            CetakBuktiSeeder::class,
        ]);
    }
}
