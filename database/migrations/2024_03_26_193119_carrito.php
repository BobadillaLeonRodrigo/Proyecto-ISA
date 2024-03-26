<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Carrito', function (Blueprint $table){
            $table->increments('ID_Carrito');
            $table->string('Estado', 50);
            $table->date('FechaHora', 50);
            $table->integer('ID_Usuario')->unsigned();
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
