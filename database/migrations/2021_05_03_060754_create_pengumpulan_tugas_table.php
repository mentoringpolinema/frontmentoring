<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumpulanTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumpulan_tugas', function (Blueprint $table) {
            $table->increments('id_pengumpulan_tugas');
            $table->string('file_tugas');
            $table->integer('tugas_id')->unsigned();
            $table->integer('mentee_id')->unsigned();
            $table->enum('status_tugas', ['Diterima', 'Ditolak', 'Pending']);
            // $table->string('pesan_tugas');
            $table->timestamps();
            $table->foreign('tugas_id')->references('id_tugas')->on('tugas');
            $table->foreign('mentee_id')->references('id_mentee')->on('mentee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumpulan_tugas');
    }
}
