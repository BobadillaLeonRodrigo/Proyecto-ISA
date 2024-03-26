<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //Establecer los campos como se encuentran en base de datos para cada Tabla (Modelo).
    use HasFactory;
    protected $table = 'Usuarios';
    protected $primaryKey = 'ID_Usuario';
    protected $fillable = [
        'Nombre_Usuario',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Email',
        'Constraseña',
        'ID_Role',
    ];
}
