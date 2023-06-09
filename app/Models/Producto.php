<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'referencia',
        'descripcion',
        'precio'
    ];

    public function variaciones()
    {
        return $this->hasMany(Variacion::class);
    }

}
