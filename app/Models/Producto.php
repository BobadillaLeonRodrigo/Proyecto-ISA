<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Establecer los campos como se encuentran en base de datos para cada Tabla (Modelo).
    use HasFactory;
    protected $table = 'Producto';
    protected $primaryKey = 'ID_Producto';
    protected $fillable = [
        'Nombre_Producto',
        'Descripcion',
        'Precio',
        'Talla',
        'Color',
        'Imagen',
    ];
}
