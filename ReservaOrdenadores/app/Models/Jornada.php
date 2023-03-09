<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Hora;

class Jornada extends Model
{
    use HasFactory;

    protected $table ='jornadas';

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }

    public function hora(){
        return $this->belongsTo(Hora::class);
    }
}
