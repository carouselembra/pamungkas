<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappingRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapping_respondens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId('kuesioner_id');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kuesioner_id')->references('id')->on('ref_tipe_kuesioners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapping_respondens');
    }
}
