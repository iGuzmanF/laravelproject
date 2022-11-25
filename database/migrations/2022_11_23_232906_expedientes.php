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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('establecimientos_id')->unsigned();
            $table->bigInteger('pacientes_id')->unsigned();
            
            $table->foreign('pacientes_id')->references('id')->on('pacientes')->onDelete("cascade");
            $table->foreign('establecimientos_id')->references('id')->on('establecimientos')->onDelete("cascade");
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
