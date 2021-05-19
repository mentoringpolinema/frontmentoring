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
        Angkatan::factory(3)->create();
        // Pengumuman::factory(100)->create();

        $this->call([
            UserSeeder::class,
            MentorSeeder::class,
            JurusanSeeder::class,
            ProdiSeeder::class,
            KelompokSeeder::class,
            PanitiaSeeder::class,
            KelasSeeder::class,
            MenteeSeeder::class,
            KegiatanSeeder::class,
            MateriSeeder::class,
            PertemuanSeeder::class,
            PengumumanSeeder::class,
            CetakBuktiSeeder::class,
        ]);
    }
}
