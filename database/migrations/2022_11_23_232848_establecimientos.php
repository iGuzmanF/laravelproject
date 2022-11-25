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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('departamentos_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();
            
            $table->string('nombre_establecimiento')->nullable();
            $table->string('direccion')->nullable();
            
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
