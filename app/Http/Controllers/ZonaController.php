<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Visita;
use App\Zona;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inputs = $request->only(['codigo', 'denominacion']);

        try {
            Visita::where('recurso', 'zona')->increment('cantidad');

            $validator = Validator::make($inputs, [
                'codigo' => 'digits:2',
                'denominacion' => 'min:5'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ], 400);
            }

            $zonas = Zona::search($inputs)
                        ->orderBy('codigo', 'asc')
                        ->get();

            return response()->json([
                'total_registros' => count($zonas),
                'datos' => $zonas
            ], 200);

        } catch (Exception $e) {
            \Log::info('Error retrieving zonas: '.$e);
            return response()->json([
                'errors' => 'Error retrieving zonas'
            ], 500);
        }        
    }
}
