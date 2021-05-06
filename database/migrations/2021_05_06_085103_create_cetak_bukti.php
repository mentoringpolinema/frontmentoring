<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetakBukti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetak_bukti', function (Blueprint $table) {
            $table->increments('id_cetak');
            $table->string('kode_cetak');
            $table->integer('mentee_id')->unsigned();
            $table->string('status_cetak');
            $table->timestamps();
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
        Schema::dropIfExists('cetak_bukti');
    }
}
