<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'Carrito';
    protected $primaryKey = 'ID_Carrito';
    protected $fillable = [
        'ID_Usuario',
        'Estado',
        'FechaHora'
    ];
}
