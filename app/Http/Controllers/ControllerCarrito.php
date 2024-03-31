<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCarrito extends Controller
{
    public function carrito()
    {
        $Carrito =  \DB::select('SELECT carrito.`ID_Carrito`,carrito.`Estado`,carrito.`FechaHora`,carrito.`ID_Usuario`, usuarios.`ID_Usuario`, usuarios.`Nombre_Usuario`
                                    FROM carrito, usuarios
                                        WHERE carrito.`ID_Usuario` = usuarios.`ID_Usuario`
        ');
        return view('admin.carrito.index', compact('Carrito'));
    }

    public function agregarCa(Request $request)
    {
        //dd($request->all());
        Carrito::create(array(
            'ID_Carrito' => $request->input('ID_Carrito'),
            'Estado' => $request->input('Estado'),
            'FechaHora' => $request->input('FechaHora'),
            'ID_Usuario' => $request->input('ID_Usuario')
        ));
        return redirect()->route("carrito");
    }
    public function eliminarCa(Carrito $id)
    {
        // Eliminar el registro
        $id->delete();

        // Reorganizar las ID
        DB::statement('SET @count = 0');
        DB::statement('UPDATE Carrito SET ID_Carrito = @count:= @count + 1');
        DB::statement('ALTER TABLE Carrito AUTO_INCREMENT = 1');

        // Redireccionar o retornar una respuesta según sea necesario
        return redirect()->route('carrito');
    }

    public function editarCa(Carrito $id)
    {
        $carrito = Carrito::all();

        return view("admin.carrito.edit")
            ->with(['carrito' => $id])
            ->with(['tipos' => $carrito]);
    }

    public function salvarCa(Carrito $id, Request $request)
    {
        //dd($request->all());
        $query = Carrito::find($id->ID_Carrito);
        $query->Estado = $request->Estado;
        $query->FechaHora = trim($request->FechaHora);
        $query->ID_Usuario = trim($request->ID_Usuario);
        $query->save();
        return redirect()->route("carrito", ['id' => $id->ID_Carrito]);
    }
}
