<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','tipo_id','marca_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|max:50|unique:modelos',
                'marca_id' => 'required',
                'tipo_id' => 'required'
            ];
        } else {
            return [
                'nombre' => "required|max:50|unique:modelos,nombre,{$id}",
                'marca_id' => 'required',
                'tipo_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre modelo requerido',
        'nombre.max' => 'El nombre debe tener máximo 50 caracteres',
        'nombre.unique' => 'el modelo ya existe en sistema',
        'marca_id' => 'la marca del modelo es requerido',
        'tipo_id' => 'el tipo del modelo es requerido'
    ];


    // un modelo pertenece a un tipo

       public function tipo()
       {
          return $this->belongsTo(Tipo::class);
       }


       // un modelo pertenece a una marca

       public function marca()
       {
          return $this->belongsTo(Marca::class);
       }
}
