<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
    use HasFactory;


    protected $fillable = ['serie','af','marca_id','user_id','inventariado','revisar_delegado'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'serie' => 'unique:teclados',
                'af' => 'required|unique:teclados',
                'marca_id' => 'required',
                //'user_id' => 'required'
            ];
        } else {
            return [
                'serie' => "unique:teclados,serie,{$id}",
                'af' => "required|unique:teclados,af,{$id}",
                'marca_id' => 'required',
                //'user_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'af.required' => 'código activo fijo es requerido',
        'af.unique' => 'código activo fijo ya existe en el sistema',
        'serie.unique' => 'número de serie ya existe en el sistema',
        'marca_id.required' => ' marca es requerida',
        //'user_id.required' => ' usuario a cargo del bien es requerido'
    ];


    //pertenece a un usuario

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // tiene una marca

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

      // observaciones
    public function observaciones()
    {
        return $this->morphMany(Observacion::class, 'observation');
    }
}
