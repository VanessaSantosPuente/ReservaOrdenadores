<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new User();
        $usuario->name = 'Javier';
        $usuario->email = 'javier@gmail.com';
        $usuario->password = bcrypt('javier');
        $usuario->save();

        $usuario1 = new User();
        $usuario1->name = 'Vanessa';
        $usuario1->email = 'vanessa@gmail.com';
        $usuario1->password = bcrypt('javier');
        $usuario1->save();

        $usuario2 = new User();
        $usuario2->name = 'Mario';
        $usuario2->email = 'mario@gmail.com';
        $usuario2->password = bcrypt('mario');
        $usuario2->save();
    }
}
