<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    protected $table =  'observations';

    protected $fillable = ['observation', 'observation_id', 'observation_type'];



    public function observation()
    {
        return $this->morphTo();
    }



}
