<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Citas;
use Illuminate\Http\Request;

class ControllerTipo_Citas extends Controller
{
    public function tipocitas()
    {
        // $TipoRol =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
        //                             FROM tipo_roles, usuarios
        //                                 WHERE usuarios.ID_Role = tipo_roles.ID_Role
        // ');
        $TipoCitas = Tipo_Citas::all();
        return view('admin.tipocitas.index', compact('TipoCitas'));
    }
}
