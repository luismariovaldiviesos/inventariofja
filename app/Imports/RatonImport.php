<?php

namespace App\Imports;

use App\Models\Raton;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RatonImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Raton([
            'serie'     => $row['serie'],
            'af'     => $row['af'],
            'marca_id'     => $row['marca_id'],
            'user_id'     => $row['user_id'],
        ]);
    }
}
