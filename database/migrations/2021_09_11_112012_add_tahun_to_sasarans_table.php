<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunToSasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sasarans', function (Blueprint $table) {
            $table->integer('tahun')->after('id');
            $table->foreignId('satker_id')->after('tahun');
            $table->foreignId('users_id')->after('satker_id');
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
            $table->dropColumn('tahun');
            $table->dropColumn('satker_id');
            $table->dropColumn('users_id');    
        });
    }
}
