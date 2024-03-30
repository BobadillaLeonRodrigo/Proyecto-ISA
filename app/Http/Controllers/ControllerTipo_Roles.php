<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Roles;
use Illuminate\Http\Request;

class ControllerTipo_Roles extends Controller
{
    public function tiporoles()
    {
        $TipoRol = Tipo_Roles::all();
        return view('admin.tiporoles.index', compact('TipoRol'));
    }

    public function agregar(Request $request)
    {
        //dd($request->all());
        Tipo_Roles::create(array(
            'ID_Role' => $request->input('ID_Role'),
            'Nombre_Role' => $request->input('Nombre_Role'),
        ));
        return redirect()->route("tiporoles");
    }

    public function eliminar(Tipo_Roles $id)
    {
        $id->delete();
        return redirect()->route('tiporoles');
    }

    public function editarTR(Tipo_Roles $id)
    {
        $tiporoles = Tipo_Roles::all();

        return view("admin.tiporoles.edit")
            ->with(['tiporole' => $id])
            ->with(['tipos' => $tiporoles]);
    }

    public function salvarTR(Tipo_Roles $id, Request $request)
    {
        //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
        //dd($request->all());
        $query = Tipo_Roles::find($id->ID_Role);
        $query->Nombre_Role = $request->Nombre_Role;
        $query->save();
        return redirect()->route("tiporoles", ['id' => $id->ID_Role]);
    }
}
