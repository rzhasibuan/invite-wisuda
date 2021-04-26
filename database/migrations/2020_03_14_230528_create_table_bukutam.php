<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBukutam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bukutam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kehadiran',6);
            $table->bigInteger('id_mhs')->unsigned();
            $table->timestamps();
            $table->foreign("id_mhs")
            ->references('id')
            ->on('table_wisudawan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bukutam');
    }
}
