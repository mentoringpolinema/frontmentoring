<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->increments('id_absensi');
            $table->integer('pertemuan_id')->unsigned();
            $table->integer('mentee_id')->unsigned();
            $table->timestamps();
            $table->foreign('pertemuan_id')->references('id_pertemuan')->on('pertemuan');
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
        Schema::dropIfExists('absensi');
    }
}