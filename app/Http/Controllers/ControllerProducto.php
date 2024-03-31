<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerProducto extends Controller
{
    public function producto()
    {
        $Productos = Producto::all();
        return view('admin.producto.index', compact('Productos'));
    }
    public function agregarP(Request $request)
    {
        if ($request->file('Imagen')  !=  '') {
            $file = $request->file('Imagen');
            $Imagen1 = $file->getClientOriginalName();
            $dates = date('YmdHis');
            $Imagen2 = $dates . $Imagen1;
            \Storage::disk('local')->put($Imagen2, \File::get($file));
        } else {
            $Imagen2 = 'bota1.jpg';
        }
        //dd($request->all());
        Producto::create(array(
            'ID_Producto' => $request->input('ID_Producto'),
            'Nombre_Producto' => $request->input('Nombre_Producto'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
            'Talla' => $request->input('Talla'),
            'Color' => $request->input('Color'),
            'Imagen' => $Imagen2
        ));
        return redirect()->route("producto");
    }

    public function eliminarP(Producto $id)
    {
        $id->delete();
        // Reorganizar las ID
        DB::statement('SET @count = 0');
        DB::statement('UPDATE Producto SET ID_Producto = @count:= @count + 1');
        DB::statement('ALTER TABLE Producto AUTO_INCREMENT = 1');
        return redirect()->route('producto');
    }

    public function editarP(Producto $id)
    {
        $producto = Producto::all();

        return view("admin.producto.edit")
            ->with(['productos' => $id])
            ->with(['tipos' => $producto]);
    }

    public function salvarP(Producto $id, Request $request)
    {
        //dd($request->all());
        $query = Producto::find($id->ID_Producto);

        if ($request->file('Imagen') != '') {
            $file = $request->file('Imagen');

            $Imagen1 = $file->getClientOriginalName();
            $ldate = date('YmdHis');
            $Imagen2 = $ldate . $Imagen1;

            \Storage::disk('local')->put($Imagen2, \File::get($file));
        } else {
            $Imagen2 = $query->Imagen;
        }
        $query->Nombre_Producto = $request->Nombre_Producto;
        $query->Descripcion = trim($request->Descripcion);
        $query->Precio = trim($request->Precio);
        $query->Talla = $request->Talla;
        $query->Color = $request->Color;
        $query->Imagen = $Imagen2;
        $query->save();
        return redirect()->route("producto", ['id' => $id->ID_Producto]);
    }
}
