<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';

    protected $fillable = [
        'id', 'tipo', 'ruta', 'procesado'
    ];

    public function scopePendientes($query)
    {
        $query->where('procesado' , 0);

        return $query;
    }
}
