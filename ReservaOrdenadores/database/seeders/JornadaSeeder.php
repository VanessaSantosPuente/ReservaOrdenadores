<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jornada;
use App\Models\Hora;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jornada = new Jornada();
        $jornada->dia = '09';
        $jornada->mes = '03';
        $jornada->anio = '2023';
        $jornada->idHora = '1';
        $jornada->save();

        $jornada1 = new Jornada();
        $jornada1->dia = '20';
        $jornada1->mes = '03';
        $jornada1->anio = '2023';
        $jornada1->idHora = '8';
        $jornada1->save();

        $jornada2 = new Jornada();
        $jornada2->dia = '15';
        $jornada2->mes = '04';
        $jornada2->anio = '2023';
        $jornada2->idHora = '6';
        $jornada2->save();
    }
}
