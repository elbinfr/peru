<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = 'ubigeos';

    protected $fillable = [
        'id', 'code', 'name', 'type', 'parent_code', 'capital', 'status'
    ];

    public function scopeSearch($query, $parameters)
    {
        $query->select('code', 'type', 'parent_code', 'name', 'capital')
                ->where('status', 1);

        foreach ($parameters as $key => $value) {
            $query->whereRaw('lower(' . $key . ') = ?', [strtolower($value)]);
        }

        return $query;
    }
}
