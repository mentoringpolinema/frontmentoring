<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok', function (Blueprint $table) {
            $table->increments('id_kelompok');
            $table->string('nama_kelompok');
            $table->integer('mentor_id')->unsigned();
            // $table->integer('materi_id')->unsigned();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('mentor_id')->references('id_mentor')->on('mentor');
            // $table->foreign('materi_id')->references('id_materi')->on('materi');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok');
    }
}
