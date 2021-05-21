<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // $namaMentor = $faker->name;
        $dataMentor = [
            [
                'user_id' => 2,
                // 'kelompok_id' => 1,
                'nama_mentor' => 'Rasyed Renaldi',
                // 'email_mentor' => $faker->unique()->safeEmail,
                // 'alamat_mentor' => $faker->country,
                // 'notelp_mentor' => $faker->phoneNumber,
                'email_mentor' => 'rasyedrenaldi7@gmail.com',
                'alamat_mentor' => 'Jl. Indrokilo Utara Malang',
                'notelp_mentor' => '081935844758',
                'status_mentor' => 'aktif',
                'slug' => Str::slug('rasyed-renaldi'),
            ],
            [
                'user_id' => 5,
                // 'kelompok_id' => 2,
                'nama_mentor' => 'Rijalus Sholihin',
                'email_mentor' => 'rijalusholihin4@gmail.com',
                'alamat_mentor' => 'Jl. Puspa Indah Malang',
                'notelp_mentor' => '081845833746',
                'status_mentor' => 'aktif',
                'slug' => Str::slug('rijalus-sholihin'),
            ]
            
        ];

        DB::table('mentor')->insert($dataMentor);
    }
}
