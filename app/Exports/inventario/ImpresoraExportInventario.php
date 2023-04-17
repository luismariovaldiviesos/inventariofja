<?php

namespace App\Exports\inventario;

use App\Models\Impresora;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;        // para definir los títulos de encabezado
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;   // para interactuar con el libro
use Maatwebsite\Excel\Concerns\WithCustomStartCell; // para definir la celda donde inicia el reporte
use Maatwebsite\Excel\Concerns\WithTitle;           // para colocar nombre a las hojas del libro
use Maatwebsite\Excel\Concerns\WithStyles;          // para dar formato a las celdas

class ImpresoraExportInventario implements FromQuery, WithHeadings, WithCustomStartCell, WithTitle, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Impresora::query()->join('users as u','u.id','impresoras.user_id')
        ->join('modelos as m','m.id','impresoras.modelo_id')
        ->join('unidads as uni', 'uni.id','u.unidad_id')
       ->select('u.name as usuario','impresoras.serie',
               'impresoras.af', 'm.nombre as marca','uni.nombre'
              );
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
      return 'IMPRESORAS';
  }
}
