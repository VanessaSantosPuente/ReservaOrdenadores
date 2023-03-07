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
        $hora->intervalo = '8:00-9:00';
        $hora->save();

        $hora1 = new Hora();
        $hora1->intervalo = '9:00-10:00';
        $hora1->save();

        $hora2 = new Hora();
        $hora2->intervalo = '10:00-11:00';
        $hora2->save();

        $hora3 = new Hora();
        $hora3->intervalo = '11:00-12:00';
        $hora3->save();

        $hora4 = new Hora();
        $hora4->intervalo = '12:00-13:00';
        $hora4->save();

        $hora5 = new Hora();
        $hora5->intervalo = '13:00-14:00';
        $hora5->save();

        $hora6 = new Hora();
        $hora6->intervalo = '15:00-16:00';
        $hora6->save();

        $hora7 = new Hora();
        $hora7->intervalo = '16:00-17:00';
        $hora7->save();

        $hora8 = new Hora();
        $hora8->intervalo = '17:00-18:00';
        $hora8->save();

        $hora9 = new Hora();
        $hora9->intervalo = '18:00-19:00';
        $hora9->save();

        $hora10 = new Hora();
        $hora10->intervalo = '19:00-20:00';
        $hora10->save();
    }
}
