<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','edificio_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'nombre' => 'required|unique:unidads',
                'edificio_id' => 'required'
            ];
        } else {
            return [
                'nombre' => "required|unique:unidads,nombre,{$id}",
                'edificio_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'nombre.required' => 'Nombre unidad requerido',
        'nombre.unique' => ' Unidad ya existe en sistema',
        'edificio_id.required' => 'Edificio requerido',
    ];


    //relaciones

    //una unidad tiene muchas pcs, impresoras, laptos,, etc

    // public function unidades()
    // {
    //     return $this->hasMany(Unidad::class);
    // }


    // una unidad  pertennece a un edificio

    public function edificio()
    {
        return  $this->belongsTo(Edificio::class);
    }
}
