<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;


    protected $fillable = ['serie','af','ac','modelo_id','user_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'serie' => 'unique:telefonos',
                'af' => 'required|unique:telefonos',
                'ac' => 'required',
                'modelo_id' => 'required',
                'user_id' => 'required'
            ];
        } else {
            return [
                'serie' => "unique:telefonos,serie,{$id}",
                'af' => "required|unique:telefonos,af,{$id}",
                'ac' => 'required',
                'modelo_id' => 'required',
                'user_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'af.required' => 'código activo fijo es requerido',
        'af.unique' => 'código activo fijo ya existe en el sistema',
        'serie.unique' => 'número de serie ya existe en el sistema',
        'ac.required' => 'año de  compra es requerido',
        'modelo_id.required' => ' marca es requerida',
        'user_id.required' => ' usuario a cargo del bien es requerido'
    ];


    //pertenece a un usuario

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // tiene un modelo

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
}
