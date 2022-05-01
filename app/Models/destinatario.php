<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinatario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function cars()
    {
        return $this->hasMany(car::class,'destinatarios_id');
    }
}
