<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ubigeo;
use App\Moneda;
use App\Zona;
use App\Via;

class HomeController extends Controller
{
    public function index()
    {
        $ubigeo = Ubigeo::select('codigo', 'tipo', 'codigo_padre', 'nombre', 'capital')
                        ->where('estado', 1)
                        ->inRandomOrder()
                        ->first();

        $diaHabil = Moneda::diaHabil()->first();
        $moneda = Moneda::tipoCambio($diaHabil->fecha)->inRandomOrder()->first();

        $zona = Zona::select('codigo', 'denominacion')
                    ->where('estado', 1)
                    ->inRandomOrder()
                    ->first();

        $via = Via::select('codigo', 'denominacion')
                    ->where('estado', 1)
                    ->inRandomOrder()
                    ->first();

        return view('welcome', compact('ubigeo', 'moneda', 'zona', 'via'));
    }
}
