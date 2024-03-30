<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ControllerProducto extends Controller
{
    public function producto()
    {
        $Productos = Producto::all();
        return view('admin.producto.index', compact('Productos'));
    }
    public function agregar(Request $request)
    {
        dd($request->all());
        Producto::create(array(
            'ID_Producto' => $request->input('ID_Producto'),
            'Nombre_Producto' => $request->input('Nombre_Producto'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
            'Talla' => $request->input('Talla'),
            'Color' => $request->input('Color'),
            'Imagen' => $request->input('Imagen')
        ));
        return redirect()->route("producto");
    }

    public function eliminar(Producto $id)
    {
        $id->delete();
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
        //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
        //dd($request->all());
        $query = Producto::find($id->ID_Producto);
        $query->Nombre_Producto = $request->Nombre_Producto;
        $query->Descripcion = trim($request->Descripcion);
        $query->Precio = trim($request->Precio);
        $query->Talla = $request->Talla;
        $query->Color = $request->Color;
        $query->Imagen = $request->Imagen;
        $query->save();
        return redirect()->route("producto", ['id' => $id->ID_Producto]);
    }
}
