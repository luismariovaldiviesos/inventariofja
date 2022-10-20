<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|max:50'
            ];
        } else {
            return [
                'nombre' => "required|max:50"
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre marca requerido',
        'nombre.max' => 'El nombre debe tener máximo 50 caracteres',
        'nombre.unique' => 'La marca ya existe en sistema'
    ];

     //relaciones
     // una marca tiene mucho tipos a traves de tabla pivot marcas_tipos

     public function tipos()
     {
        return $this->belongsToMany(Tipo::class, 'marcas_tipos', 'marca_id', 'tipo_id');
     }


     // un tipo tiene varios modelos

     public function modelos()
     {
      return $this->hasMany(Modelo::class);
     }
}




