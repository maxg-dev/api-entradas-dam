<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Evento extends Model
{
    use HasFactory, SoftDeletes;

    public function entradas(){
        return $this->belongsToMany(Entrada::class)->withPivot('correo');
    }
}
