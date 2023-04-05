<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','ram','dd','serie','af','ac','modelo_id','user_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required',
                'ram' => 'required|numeric',
                'dd' => 'required|numeric',
                'serie' => 'unique:pcs',
                'af' => 'required|unique:pcs',
                'ac' => 'required',
                'modelo_id' => 'required',
                //'user_id' => 'required'
            ];
        } else {
            return [
                'nombre' => 'required',
                'ram' => 'required|numeric',
                'dd' => 'required|numeric',
                'serie' => "unique:pcs,serie,{$id}",
                'af' => "required|unique:pcs,af,{$id}",
                'ac' => 'required',
                'modelo_id' => 'required',
                //'user_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'nombre es requerido',
        'ram.required' => 'cantidad de ram es requerida',
        'ram.numeric' => 'cantidad de ram debe ser expresada en números',
        'dd.required' => 'tamaño de disco es requerido',
        'dd.numeric' => 'tamaño de disco debe ser expresado en números',
        'af.required' => 'código activo fijo es requerido',
        'af.unique' => 'código activo fijo ya existe en el sistema',
        'serie.unique' => 'número de serie ya existe en el sistema',
        'ac.required' => 'año de  compra es requerido',
        'modelo_id.required' => ' marca es requerida',
       // 'user_id.required' => ' usuario a cargo del bien es requerido'
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
