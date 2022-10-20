<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|max:50|unique:tipos'
            ];
        } else {
            return [
                'nombre' => "required|max:50|unique:tipos,nombre,{$id}"
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre tipo requerido',
        'nombre.max' => 'El nombre debe tener máximo 50 caracteres',
        'nombre.unique' => 'el tipo de equipo ya existe en sistema'
    ];

     //relaciones

       // un tipo tiene mucho marcas a traves de tabla pivot marcas_tipos

       public function marcas()
       {
          return $this->belongsToMany(Marca::class, 'marcas_tipos', 'tipo_id', 'marca_id');
       }


       // un tipo tiene varios modelos

       public function modelos()
       {
        return $this->hasMany(Modelo::class);
       }
}
