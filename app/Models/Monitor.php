<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;



    protected $fillable = ['serie','af','marca_id','user_id','unidad_id'];


    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'af' => 'required|unique:monitors',
                'marca_id' => 'required',
                'user_id' => 'required',
                'unidad_id' => 'required'
            ];
        } else {
            return [
                'af' => "required|unique:monitors,af,{$id}",
                'marca_id' => 'required',
                'user_id' => 'required',
                'unidad_id' => 'required'
            ];
        }
    }

    public static $messages = [
        'af.required' => 'Código activo fijo requerido',
        'af.unique' => 'Código activo fijo ya existe en sistema',
        'marca_id.required' => ' marca requerida',
        'user_id.required' => ' usuario requerido',
        'unidad_id.required' => ' unidad  requerida'
    ];



    //relacioens
    // un monitor tiene una marca o pertenece

    public function marca()
    {
        return  $this->hasOne(Marca::class);
    }





}
