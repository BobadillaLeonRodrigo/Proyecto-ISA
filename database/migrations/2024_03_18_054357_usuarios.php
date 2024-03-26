<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Usuarios', function (Blueprint $table){
            $table->increments('ID_Usuario');
            $table->string('Nombre_Usuario', 50);
            $table->string('Apellido_Paterno', 50);
            $table->string('Apellido_Materno', 50);
            $table->text('Email')->unique();
            $table->string('Contraseña');
            $table->integer('ID_Role')->unsigned();
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
        schema::dropIfExists('Usuarios');
    }
}
