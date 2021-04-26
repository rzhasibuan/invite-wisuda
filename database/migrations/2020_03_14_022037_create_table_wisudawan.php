<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWisudawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_wisudawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npm',17);
            $table->string('nama',35);
            $table->string('fakultas',30);
            $table->string('prodi',30);
            $table->string('barcode',17);
            $table->string('status',6);
            $table->string('tahun');
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
        Schema::dropIfExists('table_wisudawan');
    }
}
