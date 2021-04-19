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
            $table->unsignedBigInteger('user_id');
            $table->string('nim_mentee');
            $table->string('nama_mentee');
            $table->integer('kelas_id')->unsigned();
            $table->integer('kelompok_id')->unsigned();
            $table->integer('angkatan_id')->unsigned();
            $table->string('status_mentee');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas');
            $table->foreign('kelompok_id')->references('id_kelompok')->on('kelompok');
            $table->foreign('angkatan_id')->references('id_angkatan')->on('angkatan');
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
