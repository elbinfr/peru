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
        $inputs = $request->only(['code', 'name', 'type', 'parent_code']);

        $validator = Validator::make($inputs, [
            'code' => 'digits:6',
            'name' => 'min:3',
            'type' => 'in:departamento,provincia,distrito',
            'parent_code' => 'digist:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->all()
            ], 400);
        }

        $ubigeos = Ubigeo::search($inputs)
                            ->orderBy('code', 'asc')
                            ->get();

        return $ubigeos;
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
