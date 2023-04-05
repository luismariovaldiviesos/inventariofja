<?php

namespace App\Imports;

use App\Models\Impresora;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImpresoraImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Impresora([
            'serie'     => $row['serie'],
            'af'     => $row['af'],
            'ac'     => $row['ac'],
            'modelo_id'     => $row['modelo_id'],
            'user_id'     => $row['user_id'],
        ]);
    }
}
