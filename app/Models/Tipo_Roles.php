<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Roles extends Model
{
    //Establecer los campos como se encuentran en base de datos para cada Tabla (Modelo).
    use HasFactory;
    protected $table = 'Tipo_Roles';
    protected $primaryKey = 'ID_Role';
    protected $fillable = [
        'Nombre_Role',
    ];
}
