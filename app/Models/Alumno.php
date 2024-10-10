<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable =['nombre','apellidoP','email'];

    public function carrera():BelongsTo{
        return $this->belongsTo(Carrera::class);
    }
}
