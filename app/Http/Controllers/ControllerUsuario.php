<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class ControllerUsuario extends Controller
{
    // public function inicio(){
    //     $Usuarios = Usuarios::all();
    //     return view ('usuarios.inicio', compact('Usuarios'));
    // }

    public function usuarios()
    {
        $Usuarios =  \DB::select('SELECT usuarios.ID_Usuario,usuarios.Nombre_Usuario,usuarios.Apellido_Paterno,usuarios.Apellido_Materno,usuarios.Email,usuarios.ID_Role, tipo_roles.ID_Role, tipo_roles.Nombre_Role
                                    FROM tipo_roles, usuarios
                                        WHERE usuarios.ID_Role = tipo_roles.ID_Role
        ');
        return view('admin.usuarios.index', compact('Usuarios'));
    }

    public function agregar(Request $request)
    {
        dd($request->all());
        Usuarios::create(array(
            'ID_Usuario' => $request->input('ID_Usuario'),
            'Nombre_Usuario' => $request->input('Nombre_Usuario'),
            'Apellido_Paterno' => $request->input('Apellido_Paterno'),
            'Apellido_Materno' => $request->input('Apellido_Materno'),
            'Email' => $request->input('Email'),
            'Contraseña' => $request->input('Contraseña'),
            'ID_Role' => $request->input('ID_Role')
        ));
        return redirect()->route("usuarios");
    }
}
