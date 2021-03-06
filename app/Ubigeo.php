<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = 'ubigeos';

    protected $fillable = [
        'id', 'codigo', 'nombre', 'tipo', 'codigo_padre', 'capital', 'estado'
    ];

    public function scopeSearch($query, $parameters)
    {
        $query->select('codigo', 'tipo', 'codigo_padre', 'nombre', 'capital')
                ->where('estado', 1);

        foreach ($parameters as $key => $value) {
            $query->whereRaw('lower(' . $key . ') = ?', [strtolower($value)]);
        }

        return $query;
    }
}
