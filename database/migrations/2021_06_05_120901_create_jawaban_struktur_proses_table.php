<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanStrukturProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_struktur_proses', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('satker_id');
            $table->foreignId('users_id');
            $table->foreignId('unsur_id');
            $table->foreignId('sub_unsur_id');
            $table->foreignId('parameter_id');
            $table->foreignId('kriteria_id');
            $table->string('jawaban');
            $table->foreignId('mapping_id');
            $table->string('tipe_kuesioner');
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
        Schema::dropIfExists('jawaban_struktur_proses');
    }
}
