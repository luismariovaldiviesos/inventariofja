<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    protected $table =  'observations';

    protected $fillable = ['observacion', 'af_id', 'af_type'];
}
