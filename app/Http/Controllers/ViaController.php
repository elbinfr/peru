<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Via;

class ViaController extends Controller
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
            $validator = Validator::make($inputs, [
                'codigo' => 'digits:2',
                'denominacion' => 'min:5'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ], 400);
            }

            $vias = Via::search($inputs)->orderBy('codigo', 'asc')->get();

            return response()->json([
                'total_registros' => count($vias),
                'datos' => $vias
            ]);

        } catch (Exception $e) {
            \Log::info('Error retrieving vias: '.$e);
            return response()->json([
                'errors' => 'Error retrieving vias'
            ], 500);
        }
    }
}
