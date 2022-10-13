<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $fillable = ['nombre','provincia_id'];


    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|unique:cantons',
                'provincia_id' => 'required'
            ];
        } else {
            return [
                'nombre' => "required|unique:cantons,nombre,{$id}",
                'provincia_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre cantón requerido',
        'nombre.unique' => 'La provincia ya existe en sistema',
        'provincia_id.required' => 'provincia cantón requerido',
    ];


    //relaciones

    //un canton tiene muchois edi

    public function edificios()
    {
        return $this->hasMany(Edificio::class);
    }


    // un canton pertennece a una provincia

    public function provincia()
    {
        return  $this->belongsTo(Provincia::class);
    }

}
