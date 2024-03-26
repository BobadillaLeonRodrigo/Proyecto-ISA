<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table = 'Citas';
    protected $primaryKey = 'ID_Cita';
    protected $fillable = [
        'ID_Usuario',
        'ID_TipoCitas',
        'Fecha',
        'Hora',
        'Comentario'
    ];
}
