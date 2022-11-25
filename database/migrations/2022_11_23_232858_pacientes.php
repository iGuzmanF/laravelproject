<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pacientes', function (Blueprint $table) {

            $table->engine="InnoDB";    

            $table->bigInteger('establecimientos_id')->unsigned();
            $table->bigInteger('familiares_id')->unsigned();
            $table->bigInteger('sexo_id')->unsigned();
            $table->bigInteger('estadocivil_id')->unsigned();
            $table->bigInteger('departamentos_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();

            $table->bigIncrements('id');
            $table->string('primer_nombre')->required();
            $table->string('segundo_nombre')->nullable();
            $table->string('tercer_nombre')->nullable();
            $table->string('primer_apellido')->nullable();
            $table->string('segundo_apellido')->nullable();
            $table->string('apellido_casada')->nullable();
            $table->integer('dui')->nullable();
            $table->string('fecha_nac')->required();
            $table->string('telefono')->required();
            $table->string('direccion')->required();

            $table->foreign('establecimientos_id')->references('id')->on('establecimientos')->onDelete("cascade");
            $table->foreign('familiares_id')->references('id')->on('familiares')->onDelete("cascade");
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete("cascade");
            $table->foreign('estadocivil_id')->references('id')->on('estadocivils')->onDelete("cascade");
            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete("cascade");
            $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete("cascade");
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
        //
    }
};
