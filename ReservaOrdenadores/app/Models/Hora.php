<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jornada;

class Hora extends Model
{
    use HasFactory;

    protected $table = 'horas';

    public function Jornadas(){
        return $this->hasMany(Jornada::class);
    }
}
