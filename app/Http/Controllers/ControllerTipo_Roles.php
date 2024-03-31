<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerTipo_Roles extends Controller
{
    public function tiporoles()
    {
        $TipoRol = Tipo_Roles::all();
        return view('admin.tiporoles.index', compact('TipoRol'));
    }

    public function agregarTR(Request $request)
    {
        //dd($request->all());
        Tipo_Roles::create(array(
            'ID_Role' => $request->input('ID_Role'),
            'Nombre_Role' => $request->input('Nombre_Role'),
        ));
        return redirect()->route("tiporoles");
    }

    public function eliminarTR(Tipo_Roles $id)
    {
        $id->delete();
        // Reorganizar las ID
        DB::statement('SET @count = 0');
        DB::statement('UPDATE Tipo_Roles SET ID_Role = @count:= @count + 1');
        DB::statement('ALTER TABLE Tipo_Roles AUTO_INCREMENT = 1');
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
