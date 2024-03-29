<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->increments('id_pertemuan');
            $table->string('nama_pertemuan');
            // $table->integer('mentor_id')->unsigned();
            $table->text('detail_pertemuan');
            $table->string('link_pertemuan');
            $table->integer('kegiatan_id')->unsigned();
            $table->integer('kelompok_id')->unsigned();
            // $table->timestamps();
            // $table->foreign('mentor_id')->references('id_mentor')->on('mentor');
            $table->foreign('kegiatan_id')->references('id_kegiatan')->on('kegiatan');
            $table->foreign('kelompok_id')->references('id_kelompok')->on('kelompok');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertemuan');
    }
}
