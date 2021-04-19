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
        $faker = Faker::create('id_ID');
        $namaMentor = $faker->name;
        $dataMentor = [
            'user_id' => 2,
            'nama_mentor' => $namaMentor,
            'email_mentor' => $faker->unique()->safeEmail,
            'alamat_mentor' => $faker->country,
            'notelp_mentor' => $faker->phoneNumber,
            'status_mentor' => 'aktif',
            'slug' => Str::slug($namaMentor),
        ];

        DB::table('mentor')->insert($dataMentor);
    }
}
