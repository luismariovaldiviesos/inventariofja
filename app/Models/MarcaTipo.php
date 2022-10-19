<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaTipo extends Model
{
    use HasFactory;

    protected $table =  'marcas_tipos';

    protected $fillable = ['marca_id','tipo_id'];
}
