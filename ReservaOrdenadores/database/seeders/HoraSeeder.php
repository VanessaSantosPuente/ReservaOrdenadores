<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hora;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hora = new Hora();
        $hora->intervalo = '8:30-9:20';
        $hora->save();

        $hora1 = new Hora();
        $hora1->intervalo = '9:20-10:10';
        $hora1->save();

        $hora2 = new Hora();
        $hora2->intervalo = '10:25-11:15';
        $hora2->save();

        $hora3 = new Hora();
        $hora3->intervalo = '11:15-12:05';
        $hora3->save();

        $hora4 = new Hora();
        $hora4->intervalo = '12:20-13:10';
        $hora4->save();

        $hora5 = new Hora();
        $hora5->intervalo = '13:10-14:00';
        $hora5->save();

        $hora6 = new Hora();
        $hora6->intervalo = '14:45-15:35';
        $hora6->save();

        $hora7 = new Hora();
        $hora7->intervalo = '15:35-16:25';
        $hora7->save();

        $hora8 = new Hora();
        $hora8->intervalo = '16:40-17:30';
        $hora8->save();

        $hora9 = new Hora();
        $hora9->intervalo = '17:30-18:20';
        $hora9->save();

        $hora10 = new Hora();
        $hora10->intervalo = '18:35-19:25';
        $hora10->save();

        $hora11 = new Hora();
        $hora11->intervalo = '19:25-20:15';
        $hora11->save();
    }
}
