<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Ordenador extends Model
{
    use HasFactory;
    protected $table = 'ordenadores';

    public function reservas(){
        return $this->hasMany(Reserva::class, 'id', 'idOrdenador');
    }
}
