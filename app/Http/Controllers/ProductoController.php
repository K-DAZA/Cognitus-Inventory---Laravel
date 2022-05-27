<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function producto() {
        return view('formularioproducto');
    }

    public function registrarProducto(Request $request){

        $producto = new Detalles();
        $producto->codigo_producto = $request->input('codigo_producto');
        $producto->id_movimiento = $request->input('id_movimiento');
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion_producto = $request->input('descripcion_producto');
        $producto->cantidad = $request->input('cantidad_producto');
        $producto->valor_unitario = $request->input('valor_unitario');
        $producto->valor_total = $request->input('valor_total');
        $producto->save();

        return view('index');
        
    }
}
