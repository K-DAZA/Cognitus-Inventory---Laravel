<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function registrar() {
        return view('registrar');
    }

    public function registro(Request $request){

        $movimiento = new Movimiento();
        $movimiento->id_movimiento = $request->input('id_movimiento');
        $movimiento->tipo_movimiento = $request->input('tipo_movimiento');
        $movimiento->fecha_movimiento = $request->input('fecha_movimiento');
        $movimiento->save();
        
        return view('index');
    }
}
