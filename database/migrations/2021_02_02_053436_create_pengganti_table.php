<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengganti', function (Blueprint $table) {
            $table->increments('id_pengganti');
            $table->integer('mentee_id')->unsigned();
            $table->string('file_pengganti');
            $table->timestamps();
            $table->foreign('mentee_id')->references('id_mentee')->on('mentee')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengganti');
    }
}
