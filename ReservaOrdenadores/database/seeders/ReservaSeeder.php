<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jornada;
use App\Models\User;
use App\Models\Ordenador;
use App\Models\Reserva;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        /*
        $reserva = new Reserva();
        $reserva->idJornada = 2;
        $reserva->idUser = 1;
        $reserva->idOrdenador = 2;
        $reserva->save();

        $reserva1 = new Reserva();
        $reserva1->idJornada = 3;
        $reserva1->idUser = 2;
        $reserva1->idOrdenador = 5;
        $reserva1->save();

        $reserva2 = new Reserva();
        $reserva2->idJornada = 1;
        $reserva2->idUser = 2;
        $reserva2->idOrdenador = 1;
        $reserva2->save();

        $reserva3 = new Reserva();
        $reserva3->idJornada = 2;
        $reserva3->idUser = 3;
        $reserva3->idOrdenador = 3;
        $reserva3->save();

        $reserva4 = new Reserva();
        $reserva4->idJornada = 1;
        $reserva4->idOrdenador = 2;
        $reserva4->save();
        */
        $ordenadores = Ordenador::all();
        $jornadas = Jornada::all();

        foreach($jornadas as $jornada){
            foreach($ordenadores as $ordenador){
                $reserva = new Reserva();
                $reserva->idJornada = $jornada->id;
                $reserva->idOrdenador = $ordenador->id;
                $reserva->save();
            }
        }
    }
}
