<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaEspecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_especials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PROGE_Nombre');
            $table->string('PROGE_Modalidad');
            $table->string('PROGE_URL');
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectors');
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
        Schema::dropIfExists('programa_especials');
    }
}
