<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefFormSKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_form_s_kriterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unsur_id');
            $table->foreignId('sub_unsur_id');
            $table->foreignId('parameter_id');
            $table->foreignId('kd_unsur');
            $table->foreignId('kd_sub_unsur');
            $table->foreignId('kd_parameter');
            $table->foreignId('kd_kriteria');
            $table->string('kriteria_a');
            $table->string('kriteria_b');
            $table->string('kriteria_c');
            $table->string('kriteria_d');
            $table->string('kriteria_e');
            $table->foreignId('t1');
            $table->foreignId('t2');
            $table->foreignId('t3');
            $table->foreignId('t4');
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
        Schema::dropIfExists('ref_form_s_kriterias');
    }
}
