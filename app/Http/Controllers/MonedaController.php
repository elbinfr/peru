<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Moneda;

class MonedaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = date("Y-m-d");
        $monedas = Moneda::select('moneda', 'compra', 'venta')
                            ->whereDate('fecha', $currentDate)->get();

        if (count($monedas)) {
            //traer monedas de la ultima fecha
        }

        return response()->json([
            'total_registros' => count($monedas),
            'datos' => $monedas
        ]);
    }
}
