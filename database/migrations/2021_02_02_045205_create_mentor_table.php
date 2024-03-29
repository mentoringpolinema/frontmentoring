<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentor', function (Blueprint $table) {
            $table->increments('id_mentor');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_mentor');
            $table->string('email_mentor');
            $table->string('alamat_mentor');
            $table->string('notelp_mentor');
            $table->enum('status_mentor', ['aktif', 'tidak aktif']);
            $table->string('slug');
            // $table->integer('kelompok_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('kelompok_id')->references('id_kelompok')->on('kelompok');
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
        Schema::dropIfExists('mentor');
    }
}
