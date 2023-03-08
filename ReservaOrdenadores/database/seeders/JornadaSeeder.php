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
        /*
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
        */
        
        //
        $fecha_inicio = "2022-09-09";
        $fecha_fin = "2023-06-26";
        // Convertir las fechas a timestamp
        $timestamp_inicio = strtotime($fecha_inicio);
        $timestamp_fin = strtotime($fecha_fin);
        
        // Recorrer las fechas y mostrarlas 1 dia = 86400 segundos
        for ($i = $timestamp_inicio; $i <= $timestamp_fin; $i += 86400) {
            //sacar el dia en formaato dia de la semana de 0-6
            $numero_dia = date("w", $i);
  
            // Saltar la iteración si el día es sábado (6) o domingo (0)
            if ($numero_dia != 6 && $numero_dia != 0) {
                for($x = 1; $x <=12; $x++){
                    $jornada = new Jornada();
                    $jornada->dia = date('d',$i);
                    $jornada->mes = date('m',$i);
                    $jornada->anio = date('Y',$i);
                    $jornada->idHora = $x;
                    $jornada->save();
                }
            }   
            
            
        }
    }
}
