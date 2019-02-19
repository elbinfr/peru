<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

use App\Archivo;
use App\Ubigeo;
use App\Imports\UbigeosImport;
use Excel;

class FileController extends Controller
{
    
    public function index()
    {
        return view('files.index');
    }

    public function upload(Request $request)
    {
        $file = $request->file('archive');

        $ruta = Storage::putFileAs('upload', $file, time() . '-' .$file->getClientOriginalName());

        $archivo = Archivo::create([
            'tipo' => 'ubigeos',
            'ruta' => $ruta        
        ]);

        $request->session()->flash('status', 'Archivo resgistrado con éxito');

        return redirect('files');
    }    
}
