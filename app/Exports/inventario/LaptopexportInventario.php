<?php

namespace App\Exports\inventario;

use App\Models\Laptop;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;        // para definir los títulos de encabezado
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;   // para interactuar con el libro
use Maatwebsite\Excel\Concerns\WithCustomStartCell; // para definir la celda donde inicia el reporte
use Maatwebsite\Excel\Concerns\WithTitle;           // para colocar nombre a las hojas del libro
use Maatwebsite\Excel\Concerns\WithStyles;          // para dar formato a las celdas

class LaptopexportInventario implements  FromQuery, WithHeadings, WithCustomStartCell, WithTitle, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Laptop::query()->join('users as u','u.id','laptops.user_id')
        ->join('modelos as m','m.id','laptops.modelo_id')
        ->join('unidads as uni', 'uni.id','u.unidad_id')
        ->select('u.name as usuario','laptops.ram',
                'laptops.ram','laptops.dd','laptops.serie',
                'laptops.af', 'm.nombre as modelo','laptops.ac','uni.nombre',
               );
    }

    public function headings(): array
    {
        return ["USUARIO","RAM","DISCO DURO","SERIE","ACTIVO FIJO","MODELO","AÑO DE COMPRA","UBICACIÓN"];
    }

    public function startCell(): string
    {
        return 'A1';
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true ]],
        ];
    }
    public function title(): string
    {
        return 'LAPTOPS';
    }
}
