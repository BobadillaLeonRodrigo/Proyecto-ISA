<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Citas;
use Illuminate\Http\Request;

class ControllerTipo_Citas extends Controller
{
    public function tipocitas()
    {
        $TipoCitas = Tipo_Citas::all();
        return view('admin.tipocitas.index', compact('TipoCitas'));
    }
    public function agregar(Request $request)
    {
        //dd($request->all());
        Tipo_Citas::create(array(
            'ID_TipoCitas' => $request->input('ID_TipoCitas'),
            'Descripcion' => $request->input('Descripcion'),
        ));
        return redirect()->route("tipocitas");
    }

    public function eliminar(Tipo_Citas $id)
    {
        $id->delete();
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
        //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
        //dd($request->all());
        $query = Tipo_Citas::find($id->ID_TipoCitas);
        $query->Descripcion = $request->Descripcion;
        $query->save();
        return redirect()->route("tipocitas", ['id' => $id->ID_TipoCitas]);
    }
}
