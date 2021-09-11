<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_outputs', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('satker_id');
            $table->foreignId('users_id');
            $table->foreignId('sasaran_id')->references('id')->on('sasarans')->onDelete('cascade');
            $table->foreignId('ikk_target_id')->references('id')->on('ikk_targets')->onDelete('cascade');
            $table->foreignId('j_sasaran_id')->references('id')->on('jawaban_sasarans')->onDelete('cascade');
            $table->integer('j_ikk');
            $table->integer('j_target');
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
        Schema::dropIfExists('jawaban_outputs');
    }
}
