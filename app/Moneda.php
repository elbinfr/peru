<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = 'monedas';

    protected $fillable = [
        'id', 'fecha', 'moneda', 'compra', 'venta'
    ];

    public function scopeDiaHabil($query)
    {
        return $query->select('fecha')
                    ->distinct()
                    ->orderBy('fecha', 'desc')
                    ->limit(1);        
    }

    public function scopeTipoCambio($query, $date)
    {
        return $query->select('moneda', 'compra', 'venta')
                    ->whereDate('fecha', $date);
    }
}
