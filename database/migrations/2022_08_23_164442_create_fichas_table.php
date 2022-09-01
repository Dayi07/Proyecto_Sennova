<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('FICHA_Identificador_Unico');
            $table->date('FICHA_Fecha_Inicio');
            $table->date('FICHA_Fecha_Terminacion');
            $table->string('FICHA_Etapa');
            $table->string('FICHA_Nombre_Responsable');
            $table->unsignedBigInteger('id_centro');
            $table->foreign('id_centro')->references('id')->on('centros');
            $table->unsignedBigInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
            $table->unsignedBigInteger('id_programa_formacion');
            $table->foreign('id_programa_formacion')->references('id')->on('programa_formacions');
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
        Schema::dropIfExists('fichas');
    }
}
