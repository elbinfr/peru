<?php

namespace App\Imports;

use App\Ubigeo;
use Maatwebsite\Excel\Concerns\ToModel;

class UbigeosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ubigeo([
            //
        ]);
    }
}
