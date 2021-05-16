<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->increments('id_keluhan');
            $table->integer('mentee_id')->unsigned();
            $table->integer('panitia_id')->unsigned()->nullable();
            $table->text('keterangan_keluhan');
            $table->text('isi_keluhan');
            $table->text('jawab_keluhan')->nullable();
            $table->enum('status_keluhan', ['Selesai', 'Pending', 'Terjawab', 'Belum']);
            $table->timestamps();
            $table->foreign('mentee_id')->references('id_mentee')->on('mentee');
            $table->foreign('panitia_id')->references('id_panitia')->on('panitia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhan');
    }
}
