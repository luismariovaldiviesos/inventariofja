<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','canton_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|unique:edificios',
                'canton_id' => 'required'
            ];
        } else {
            return [
                'nombre' => "required|unique:edificios,nombre,{$id}",
                'canton_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre cantón requerido',
        'nombre.unique' => 'La provincia ya existe en sistema',
        'canton_id.required' => 'provincia cantón requerido',
    ];


    //relaciones

    //un canton tiene muchois unidades

    public function unidades()
    {
        return $this->hasMany(Unidad::class);
    }


    // un canton pertennece a una canton

    public function canton()
    {
        return  $this->belongsTo(Canton::class);
    }


}
