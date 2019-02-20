<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Moneda;

class ProcesarMonedas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:monedas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save the exchange rate from the SBS page';

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
        $this->info('Inicia proceso de guardado de tipo de cambio SBS');
        $currentDate = date("Y-m-d");

        $pageContent = $this->readPageSBS();
        if (strpos($pageContent, 'rgNoRecords') === false) {
            $data = $this->prepareData($pageContent);
            $this->insert($data, $currentDate);            
        } else {
            $this->info('No existe información para la fecha elegida');
        }

        $this->info('Finaliza proceso de guardado de tipo de cambio SBS');
    }

    private function readPageSBS()
    {
        $html = file_get_contents('http://www.sbs.gob.pe/app/pp/SISTIP_PORTAL/Paginas/Publicacion/TipoCambioPromedio.aspx'); //Convierte la información de la URL en cadena
        $positionTable = strpos($html, 'ctl00_cphContent_rgTipoCambio_ctl00');
    
        $lastPosition = strpos($html, '</table>', $positionTable);
        $portionTable = substr($html, $positionTable, $lastPosition - $positionTable);
        
        $firstPositionTbody = strpos($portionTable, '<tbody>');
        $lastPositionTbody = strpos($portionTable, '</tbody>');
        $length = ($lastPositionTbody + 8) - $firstPositionTbody;
        $portionTbody = substr($portionTable, $firstPositionTbody, $length);
        $portionTbody = trim(preg_replace('/\t+/', '', $portionTbody));
        $portionTbody = preg_replace('/\r/', '', $portionTbody);
        $portionTbody = preg_replace('/\n/', '', $portionTbody);
        $portionTbody = str_replace('<tbody>', "", $portionTbody);
        $portionTbody = str_replace('</tbody>', "", $portionTbody);

        return $portionTbody;
    }

    private function prepareData($contentHtml)
    {
        $rows = explode('</tr>', $contentHtml);

        $data = [];
        foreach ($rows as $row) {
            $currency = [];
            if ($row != '') {
                $columns = explode('</td>', $row);
                $currency['moneda'] =  mb_strtoupper(strip_tags($columns[0]), 'UTF-8');
                $currency['compra'] =  floatval(strip_tags($columns[1]));
                $currency['venta'] =  floatval(strip_tags($columns[2]));
                
                array_push($data, $currency);
            }
        }

        return $data;
    }

    private function insert($data, $currentDate)
    {
        foreach ($data as $item) {
            Moneda::create([
                'fecha' => $currentDate,
                'moneda' => $item['moneda'],
                'compra' => $item['compra'],
                'venta' => $item['venta']
            ]);
        }
    }
}
