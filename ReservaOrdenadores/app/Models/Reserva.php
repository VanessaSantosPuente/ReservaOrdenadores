<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Ordenador;
use App\Models\Jornada;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';

    public function ordenador(){
        return $this->belongsTo(Ordenador::class, 'idOrdenador', 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'idUser', 'id');
    }

    public function jornada(){
        return $this->belongsTo(Jornada::class, 'idJornada', 'id');
    }
}
