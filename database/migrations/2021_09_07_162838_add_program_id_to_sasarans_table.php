<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgramIdToSasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sasarans', function (Blueprint $table) {
            $table->foreignId('sasaran_program_id')->after('id');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sasarans', function (Blueprint $table) {
            $table->dropColumn('sasaran_program_id');
        });
    }
}
