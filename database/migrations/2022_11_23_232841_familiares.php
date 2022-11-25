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
        Schema::create('familiares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('departamentos_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();
            
            $table->string('nombre')->required();
            $table->string('apellido')->required();
            $table->string('parentesco')->required();
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
