<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerTipo_Citas extends Controller
{
    public function tipocitas()
    {
        $TipoCitas = Tipo_Citas::all();
        return view('admin.tipocitas.index', compact('TipoCitas'));
    }
    public function agregarTC(Request $request)
    {
        //dd($request->all());
        Tipo_Citas::create(array(
            'ID_TipoCitas' => $request->input('ID_TipoCitas'),
            'Descripcion' => $request->input('Descripcion'),
        ));
        return redirect()->route("tipocitas");
    }

    public function eliminarTC(Tipo_Citas $id)
    {
        $id->delete();
        // Reorganizar las ID
        DB::statement('SET @count = 0');
        DB::statement('UPDATE Tipo_Citas SET ID_TipoCitas = @count:= @count + 1');
        DB::statement('ALTER TABLE Tipo_Citas AUTO_INCREMENT = 1');
        return redirect()->route('tipocitas');
    }

    public function editarTC(Tipo_Citas $id)
    {
        $tipocitas = Tipo_Citas::all();

        return view("admin.tipocitas.edit")
            ->with(['tipocita' => $id])
            ->with(['tipos' => $tipocitas]);
    }

    public function salvarTC(Tipo_Citas $id, Request $request)
    {
        //dd($request->all());
        $query = Tipo_Citas::find($id->ID_TipoCitas);
        $query->Descripcion = $request->Descripcion;
        $query->save();
        return redirect()->route("tipocitas", ['id' => $id->ID_TipoCitas]);
    }
}
