<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_satkers', function (Blueprint $table) {
            $table->id();
            $table->string('kementrian');
            $table->string('nama_satker');
            $table->string('nickname_satker');
            $table->string('alamat_satker');
            $table->string('email_satker');
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
        Schema::dropIfExists('ref_satkers');
    }
}
