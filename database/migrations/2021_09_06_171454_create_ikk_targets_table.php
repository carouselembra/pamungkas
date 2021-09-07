<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkkTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikk_targets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sasaran_id')->references('id')->on('sasarans')->onDelete('cascade');
            $table->text('ikk');
            $table->string('target');
            $table->string('satuan');
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
        Schema::dropIfExists('ikk_targets');
    }
}
