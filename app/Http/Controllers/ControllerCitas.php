<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class ControllerCitas extends Controller
{
    public function citas()
    {
        // $TipoRol =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
        //                             FROM tipo_roles, usuarios
        //                                 WHERE usuarios.ID_Role = tipo_roles.ID_Role
        // ');
        $Citas = Citas::all();
        return view('admin.citas.index', compact('Citas'));
    }
}
