<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Citas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Citas', function (Blueprint $table) {
            $table->increments('ID_Cita');
            $table->date('Fecha');
            $table->time('Hora');
            $table->text('Comentario');
            $table->integer('ID_Usuario')->unsigned();
            $table->integer('ID_TipoCitas')->unsigned();
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
        schema::dropIfExists('Citas');
    }
}
