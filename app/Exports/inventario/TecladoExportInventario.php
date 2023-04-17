<?php

namespace App\Exports\inventario;

use App\Models\Teclado;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;        // para definir los títulos de encabezado
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;   // para interactuar con el libro
use Maatwebsite\Excel\Concerns\WithCustomStartCell; // para definir la celda donde inicia el reporte
use Maatwebsite\Excel\Concerns\WithTitle;           // para colocar nombre a las hojas del libro
use Maatwebsite\Excel\Concerns\WithStyles;          // para dar formato a las celdas

class TecladoExportInventario implements FromQuery, WithHeadings, WithCustomStartCell, WithTitle, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Teclado::query()->join('users as u','u.id','teclados.user_id')
        ->join('marcas as m','m.id','teclados.marca_id')
        ->join('unidads as uni', 'uni.id','u.unidad_id')
        ->select('u.name as usuario','teclados.serie',
                'teclados.af', 'm.nombre as marca','uni.nombre' );
    }

  // cabecera del reporte
  public function headings(): array
  {
      return ["USUARIO","SERIE","ACTIVO FIJO","MARCA","UBICACION"];
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
      return 'TECLADOS';
  }
}
