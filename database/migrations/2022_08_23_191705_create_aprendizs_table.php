<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('APREN_Nombre');
            $table->string('APREN_Tipo_Documento');
            $table->integer('APREN_Documento');
            $table->string('APREN_Correo');
            $table->string('APREN_Genero');
            $table->string('APREN_Estado');
            $table->integer('APREN_Telefono');
            $table->unsignedBigInteger('id_ficha');
            $table->foreign('id_ficha')->references('id')->on('fichas');

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
        Schema::dropIfExists('aprendizs');
    }
}
