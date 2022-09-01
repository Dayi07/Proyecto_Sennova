<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_formacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PROGR_Nombre');
            $table->string('PROGR_Modalidad');
            $table->string('PROGR_Tipo_Formacion');
            $table->string('PROGR_Duracion');
            $table->string('PROGR_Version');
            $table->string('PROGR_Nivel');
            $table->string('PROGR_URL');
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
        Schema::dropIfExists('programa_formacions');
    }
}
