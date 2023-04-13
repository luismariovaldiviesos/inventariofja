<?php

namespace App\Exports;

use App\Models\Laptop;
use Maatwebsite\Excel\Concerns\FromCollection;      // para trabajar con colecciones y obtener la data
use Maatwebsite\Excel\Concerns\WithHeadings;        // para definir los títulos de encabezado
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;   // para interactuar con el libro
use Maatwebsite\Excel\Concerns\WithCustomStartCell; // para definir la celda donde inicia el reporte
use Maatwebsite\Excel\Concerns\WithTitle;           // para colocar nombre a las hojas del libro
use Maatwebsite\Excel\Concerns\WithStyles;          // para dar formato a las celdas

class LaptopsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithTitle, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Laptop::join('users as u','u.id','laptops.user_id')
                ->join('modelos as m','m.id','laptops.modelo_id')
                ->select('u.name as usuario','laptops.ram',
                        'laptops.ram','laptops.dd','laptops.serie',
                        'laptops.af', 'm.nombre as modelo','laptops.ac',
                       )
                ->get();

        return $data;

    }

     // cabecera del reporte
     public function headings(): array
     {
         return ["USUARIO","RAM","DISCO DURO","SERIE","ACTIVO FIJO","MODELO","AÑO DE COMPRA"];
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
         return 'inventario de laptops';
     }
}
