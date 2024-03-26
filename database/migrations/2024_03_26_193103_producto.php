<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Producto', function (Blueprint $table) {
            $table->increments('ID_Producto');
            $table->string('Nombre_Producto', 50);
            $table->text('Descripcion', 50);
            $table->double('Precio');
            $table->double('Talla');
            $table->string('Color',50);
            $table->string('Imagen', 255);
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
        schema::dropIfExists('Producto');
    }
}
