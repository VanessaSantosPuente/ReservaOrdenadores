<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ordenador;

class OrdenadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordenador = new Ordenador();
        $ordenador->nombre = 'Portatil1';
        $ordenador->save();

        $ordenador1 = new Ordenador();
        $ordenador1->nombre = 'Portatil2';
        $ordenador1->save();

        $ordenador2 = new Ordenador();
        $ordenador2->nombre = 'Portatil3';
        $ordenador2->save();

        $ordenador3 = new Ordenador();
        $ordenador3->nombre = 'Portatil4';
        $ordenador3->save();

        $ordenador4 = new Ordenador();
        $ordenador4->nombre = 'Portatil5';
        $ordenador4->save();
    }
}
