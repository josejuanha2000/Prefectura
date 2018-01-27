<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         $table->increments('id');
         $table->string('id_empleado');
         $table->string('titulo');
         $table->string('nombre_empleado');
         $table->string('frecuencia');
         $table->string('act');
         $table->string('id_periodo');
         $table->string('id_periodo')->reference ('id')->on('periodos');
         $table->timestamps();
         $table->timestamp('published_at');
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
}
