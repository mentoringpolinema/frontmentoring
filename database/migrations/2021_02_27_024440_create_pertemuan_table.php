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
            $table->string('mentor_pertemuan');
            $table->string('minggu_pertemuan');
            $table->date('tanggal_pertemuan');
            $table->string('detail_pertemuan');
            $table->string('link_pertemuan');
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
        Schema::dropIfExists('pertemuan');
    }
}
