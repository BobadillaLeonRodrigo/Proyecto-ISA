<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ControllerUsuario extends Controller
{
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
        //dd($request->all());
        Usuarios::create(array(
            'ID_Usuario' => $request->input('ID_Usuario'),
            'Nombre_Usuario' => $request->input('Nombre_Usuario'),
            'Apellido_Paterno' => $request->input('Apellido_Paterno'),
            'Apellido_Materno' => $request->input('Apellido_Materno'),
            'Email' => $request->input('Email'),
            'Contraseña' => Hash::make($request->input('Contraseña')),
            'ID_Role' => $request->input('ID_Role')
        ));
        return redirect()->route("usuarios");
    }

    public function eliminar(Usuarios $id)
    {
        $id->delete();
        return redirect()->route('usuarios');
    }

    public function editar(Usuarios $id)
    {
        $usuarios_a = Usuarios::all();

        return view("admin.usuarios.edit")
            ->with(['usuario' => $id])
            ->with(['tipos' => $usuarios_a]);
    }

    public function salvar(Usuarios $id, Request $request)
    {
        //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
        //dd($request->all());
        $query = Usuarios::find($id->ID_Usuario);
        $query->Nombre_Usuario = $request->Nombre_Usuario;
        $query->Apellido_Paterno = trim($request->Apellido_Paterno);
        $query->Apellido_Materno = trim($request->Apellido_Materno);
        $query->Email = $request->Email;
        $query->Contraseña = $request->Contraseña;
        $query->save();
        return redirect()->route("usuarios", ['id' => $id->ID_Usuario]);
    }
}
