<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('CURSO_Numero');
            $table->string('CURSO_Nombre');
            $table->string('CURSO_Estado');
            $table->string('CURSO_Tipo');
            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id')->on('municipio_cursos');
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectors');
            $table->unsignedBigInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
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
        Schema::dropIfExists('cursos');
    }
}
