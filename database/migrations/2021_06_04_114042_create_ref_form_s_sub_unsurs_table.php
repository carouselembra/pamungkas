<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefFormSSubUnsursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_form_s_sub_unsurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unsur_id');
            $table->foreignId('kd_unsur');
            $table->foreignId('kd_sub_unsur');
            $table->string('uraian_sub_unsur');
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
        Schema::dropIfExists('ref_form_s_sub_unsurs');
    }
}
