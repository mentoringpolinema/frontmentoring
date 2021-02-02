<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee', function (Blueprint $table) {
            $table->increments('id_mentee');
            $table->string('nim_mentee');
            $table->string('nama_mentee');
            $table->string('kelas_id');
            $table->string('kelompok_id');
            $table->string('angkatan_id');
            $table->string('status_mentee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentee');
    }
}
