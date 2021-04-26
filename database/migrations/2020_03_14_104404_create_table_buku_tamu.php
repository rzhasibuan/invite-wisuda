<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBukuTamu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku_tamu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kehadiran',6);
            $table->timestamps();
            $table->integer('id_mhs')->references('id')->on('table_wisudawan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_buku_tamu');
    }
}
