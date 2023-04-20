<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegado extends Model
{
    use HasFactory;

    protected $fillable = ['unidad_id','user_id'];

    public static function rules($id)
    {
        if ($id <= 0) {
            return [
                'unidad_id' => 'required|unique:delegados',
                //'user_id' => 'required|unique:delegados'
            ];
        } else {
            return [
                'unidad_id' => "required|unique:delegados,unidad_id,{$id}",
                //'user_id' => "required|unique:delegados,user_id,{$id}",
            ];
        }
    }

    public static $messages = [
        'unidad_id.required' => ' unidad requerida',
        'unidad_id.unique' => ' Unidad ya tiene delegado asignado',
        // 'user_id.required' => ' delegado requerido',
        // 'user_id.unique' => ' Usuario ya es delegado asignado',
    ];

    //relaciones
    // un delegado una unidad


    public function unidad()
    {
        return  $this->belongsTo(Unidad::class);
    }

    public function usuario()
    {
        return  $this->belongsTo(User::class);
    }
}
