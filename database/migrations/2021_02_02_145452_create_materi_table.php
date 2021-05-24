<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->increments('id_materi');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_materi');
            $table->string('link_materi');
            $table->string('link_materi_embed');
            $table->text('detail_materi');
            $table->string('slug');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('kegiatan_id')->unsigned();
            $table->foreign('kegiatan_id')->references('id_kegiatan')->on('kegiatan');
            // $table->timestamps();
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
        Schema::dropIfExists('materi');
    }
}
