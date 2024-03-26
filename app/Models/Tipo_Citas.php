<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Citas extends Model
{
    use HasFactory;
    protected $table = 'Tipo_Citas';
    protected $primaryKey = 'ID_TipoCitas';
    protected $fillable = [
        'Descripcion',
    ];
}
