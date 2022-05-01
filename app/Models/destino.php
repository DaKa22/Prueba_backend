<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destino extends Model
{
    use HasFactory;
    protected $fillable = [
        'clasificacion',
        'ciudad',
    ];
    public function cars()
    {
        return $this->hasMany(car::class,'destinos_id');
    }
}
