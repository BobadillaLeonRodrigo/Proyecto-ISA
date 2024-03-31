<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCitas extends Controller
{
    public function citas()
    {
        $Citas = \DB::select('SELECT citas.`ID_Cita`,citas.`Fecha`,citas.`Hora`,citas.`Comentario`,citas.`ID_Usuario`,citas.`ID_TipoCitas`,usuarios.`ID_Usuario`,usuarios.`Nombre_Usuario`,tipo_citas.`ID_TipoCitas`,tipo_citas.`Descripcion`
                                FROM citas,usuarios,tipo_citas
                                    WHERE citas.`ID_Usuario` = usuarios.`ID_Usuario` AND citas.`ID_TipoCitas` = tipo_citas.`ID_TipoCitas`');
        return view('admin.citas.index', compact('Citas'));
    }

    public function agregarCi(Request $request)
    {
        //dd($request->all());
        Citas::create(array(
            'ID_Citas' => $request->input('ID_Citas'),
            'Fecha' => $request->input('Fecha'),
            'Hora' => $request->input('Hora'),
            'Comentario' => $request->input('Comentario'),
            'ID_Usuario' => $request->input('ID_Usuario'),
            'ID_TipoCitas' => $request->input('ID_TipoCitas')
        ));
        return redirect()->route("citas");
    }
    public function eliminarCi(Citas $id)
    {
        // Eliminar el registro
        $id->delete();

        // Reorganizar las ID
        DB::statement('SET @count = 0');
        DB::statement('UPDATE Citas SET ID_Cita = @count:= @count + 1');
        DB::statement('ALTER TABLE Citas AUTO_INCREMENT = 1');

        // Redireccionar o retornar una respuesta según sea necesario
        return redirect()->route('citas');
    }

    public function editarCi(Citas $id)
    {
        $citas = Citas::all();

        return view("admin.citas.edit")
            ->with(['citas' => $id])
            ->with(['tipos' => $citas]);
    }

    public function salvarCi(Citas $id, Request $request)
    {
        dd($request->all());
        $query = Citas::find($id->ID_Citas);
        $query->Fecha = trim($request->Fecha);
        $query->Hora = trim($request->Hora);
        $query->Comentario = trim($request->Comentario);
        $query->ID_Usuario = $request->ID_Usuario;
        $query->ID_TipoCitas = $request->Contraseña;
        $query->save();
        return redirect()->route("citas", ['id' => $id->ID_Citas]);
    }
}
