<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Ubigeo;

class UbigeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inputs = $request->only(['codigo', 'nombre', 'tipo', 'codigo_padre']);

        try {
            $validator = Validator::make($inputs, [
                'codigo' => 'digits:6',
                'nombre' => 'min:3',
                'tipo' => 'in:departamento,provincia,distrito',
                'codigo_padre' => 'digist:6'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ], 400);
            }

            $ubigeos = Ubigeo::search($inputs)
                                ->orderBy('codigo', 'asc')
                                ->get();

            return response()->json([
                'total_registros' => count($ubigeos),
                'datos' => $ubigeos
            ], 200);
        } catch (Exception $e) {
            \Log::info('Error retrieving ubigeos: '.$e);
            return response()->json([
                'errors' => 'Error retrieving ubigeos'
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
