<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_sasarans', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('satker_id');
            $table->foreignId('users_id');
            $table->foreignId('sasaran_id')->references('id')->on('sasarans')->onDelete('cascade');
            $table->integer('j_sasaran_t')->nullable();
            $table->integer('j_sasaran_b')->nullable();
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
        Schema::dropIfExists('jawaban_sasarans');
    }
}
