<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovimientoController extends Controller
{
    public function consulta(){
        return view('consultamovimiento');
    }

    public function index(){
        $movimiento = DB::table('movimientos')->select('id', 'tipo_movimiento', 'fecha_movimiento')->get();
        return view();
    }
}
