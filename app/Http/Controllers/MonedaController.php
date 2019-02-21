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
        try {
            $currentDate = date("Y-m-d");
            $monedas = Moneda::tipoCambio($currentDate)->get();

            if (count($monedas) < 0) {
                $diaHabil = App\Moneda::diaHabil()->first();

                $monedas = Moneda::tipoCambio($diaHabil->fecha)->get();
            }

            return response()->json([
                'total_registros' => count($monedas),
                'datos' => $monedas
            ]);
        } catch (Exception $e) {
            \Log::info('Error obteniendo monedas: '.$e);
            return response()->json([
                'errors' => 'Error obteniendo monedas'
            ], 500);
        }        
    }
}
