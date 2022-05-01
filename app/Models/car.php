<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'destinos_id',
        'destinatarios_id'
    ];
    public function destinos()
    {
        return $this->belongsTo(destino::class);
    }
    public function destinatarios()
    {
        return $this->belongsTo(destinatario::class);
    }
}
