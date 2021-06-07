<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunToMappingRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mapping_respondens', function (Blueprint $table) {
            $table->integer('tahun')->after('id');
            $table->foreignId('satker_id')->after('tahun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mapping_respondens', function (Blueprint $table) {
            //
        });
    }
}
