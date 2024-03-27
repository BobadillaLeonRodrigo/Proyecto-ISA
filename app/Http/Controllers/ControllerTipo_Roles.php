<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Roles;
use Illuminate\Http\Request;

class ControllerTipo_Roles extends Controller
{
    public function tiporoles()
    {
        // $TipoRol =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
        //                             FROM tipo_roles, usuarios
        //                                 WHERE usuarios.ID_Role = tipo_roles.ID_Role
        // ');
        $TipoRol = Tipo_Roles::all();
        return view('admin.tiporoles.index', compact('TipoRol'));
    }
}
