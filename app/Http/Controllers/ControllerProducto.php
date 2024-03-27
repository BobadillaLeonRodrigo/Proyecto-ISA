<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ControllerProducto extends Controller
{
    public function producto()
    {
        // $TipoRol =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
        //                             FROM tipo_roles, usuarios
        //                                 WHERE usuarios.ID_Role = tipo_roles.ID_Role
        // ');
        $Productos = Producto::all();
        return view('admin.producto.index', compact('Productos'));
    }
}
