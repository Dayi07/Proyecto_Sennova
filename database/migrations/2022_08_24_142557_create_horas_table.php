<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HORAS_Monitores'); 
            $table->string('HORAS_Inst_Empresa');
            $table->string('HORAS_Contratista_Externo');
            $table->string('HORAS_Planta');
            $table->string('HORAS_Total');
            $table->unsignedBigInteger('id_ocupacion');
            $table->foreign('id_ocupacion')->references('id')->on('ocupacions');
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
        Schema::dropIfExists('horas');
    }
}
