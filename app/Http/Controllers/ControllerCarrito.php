<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class ControllerCarrito extends Controller
{
    public function carrito()
    {
        // $TipoRol =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
        //                             FROM tipo_roles, usuarios
        //                                 WHERE usuarios.ID_Role = tipo_roles.ID_Role
        // ');
        $Carrito = Carrito::all();
        return view('admin.carrito.index', compact('Carrito'));
    }
}
