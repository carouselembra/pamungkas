<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisasiOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisasi_outputs', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('satker_id');
            $table->foreignId('users_id');
            $table->foreignId('ikk_target_id')->references('id')->on('ikk_targets')->onDelete('cascade');
            $table->integer('realisasi')->nullable();
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
        Schema::dropIfExists('realisasi_outputs');
    }
}
