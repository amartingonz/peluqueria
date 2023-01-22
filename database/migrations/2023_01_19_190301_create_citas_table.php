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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();   //  Clave primaria citas
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('clientes')->onUpdate('cascade');
            $table->string('hora',255);
            $table->date('fecha',255);
            $table->string('anotacion',255);
            $table->string('realizado',255); 
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
        Schema::dropIfExists('citas');
    }
};
