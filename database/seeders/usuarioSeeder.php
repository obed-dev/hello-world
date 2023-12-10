<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $usuario1 = new Usuario();

        $usuario1->nombre = 'Usuario1';
        $usuario1->email = 'usuario1@example.com';
        $usuario1->save();

        $usuario2 = new Usuario();
        $usuario2->nombre = 'Usuario2';
        $usuario2->email = 'usuario2@example.com';
        $usuario2->save();

        $usuario3 = new Usuario();
        $usuario3->nombre = 'Usuario3';
        $usuario3->email = 'usuario3@example.com';
        $usuario3->save();


        Usuario::factory(20)->create();
    }
}
