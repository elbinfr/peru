<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Archivo;
use App\Ubigeo;
use App\Imports\UbigeosImport;
use Excel;

class ProcesarUbigeos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:ubigeos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from ubigeos files to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Inicia proceso de archivos de ubigeos ...............');
        $this->info('Obteniendo archivos de ubigeos pendientes');
        $pendingFiles = Archivo::pendientes()->where('tipo', 'ubigeos')->get();

        $this->info('Total de archivos pendientes: ' . count($pendingFiles));

        foreach ($pendingFiles as $file) {
            $this->info('Procesando archivo ' . $file->ruta);
            $this->processFile($file);            
        }

        $this->info('Finaliza proceso de archivos de ubigeos ..............');
    }

    private function processFile($file)
    {
        $array = Excel::toArray(new UbigeosImport, $file->ruta);
        $data = $array[0];
        for ($i = 1; $i < count($data); $i++) {
            $item = $data[$i];
            $prepareData = $this->prepareData($item);
            Ubigeo::create([
                'codigo' => $prepareData['codigo'],
                'nombre' => $item[4],
                'tipo' => $prepareData['tipo'],
                'codigo_padre' => $prepareData['codigo_padre'],
                'capital' => $item[5]
            ]);
        }
        $file->procesado = 1;
        $file->save();
    }

    private function prepareData($ubigeo)
    {
        $codigo = $this->correctCode($ubigeo[1]) . $this->correctCode($ubigeo[2]) . $this->correctCode($ubigeo[3]);
        if ($ubigeo[2] == 0 && $ubigeo[3] == 0) {
            $tipo = 'departamento';
            $codigo_padre = null;
        } else if ($ubigeo[2] > 0 && $ubigeo[3] == 0) {
            $tipo = 'provincia';
            $codigo_padre = $this->correctCode($ubigeo[1]) . '0000';
        } else {
            $tipo = 'distrito';
            $codigo_padre = $this->correctCode($ubigeo[1]) . $this->correctCode($ubigeo[2]) . '00';
        }

        return [
            'codigo' => $codigo,
            'tipo' => $tipo,
            'codigo_padre' => $codigo_padre
        ];
    }

    private function correctCode($codigo)
    {
        $codigo_ubigeo = $codigo;
        if ($codigo <= 9) {
            $codigo_ubigeo = '0' . strval($codigo);
        }

        return strval($codigo_ubigeo);
    }
}
