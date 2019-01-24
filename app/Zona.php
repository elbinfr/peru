<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';

    protected $fillable = [
        'id', 'codigo', 'denominacion', 'estado'
    ];

    public function scopeSearch($query, $parameters)
    {
        $query->select('codigo', 'denominacion')
                ->where('estado', 1);

        foreach ($parameters as $key => $value) {
            $query->whereRaw('lower(' . $key . ') = ?', [strtolower($value)]);
        }

        return $query;
    }
}
