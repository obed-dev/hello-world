<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

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



        $libro1 = new Libro();
        $libro1->nombre = 'Libro 1';
        $libro1->save();

        $libro2 = new Libro();
        $libro2->nombre = 'Libro 2';
        $libro2->save();

        $libro3 = new Libro();
        $libro3->nombre = 'Libro 3';
        $libro3->save();

        $libro4 = new Libro();
        $libro4->nombre = 'Libro 4';
        $libro4->save();

        $libro5 = new Libro();
        $libro5->nombre = 'Libro 5';
        $libro5->save();

        $prestamo1 = new Prestamo();

        $prestamo1->idUsuario = 1;
        $prestamo1->idLibro = 1;
        $prestamo1->devuelto = false;
        $prestamo1->save();

        $prestamo2 = new Prestamo();
        $prestamo2->idUsuario = 2;
        $prestamo2->idLibro = 2;
        $prestamo2->devuelto = true;
        $prestamo2->save();

        $prestamo3 = new Prestamo();
        $prestamo3->idUsuario = 3;
        $prestamo3->idLibro = 3;
        $prestamo3->devuelto = false;
        $prestamo3->save();

        $prestamo4 = new Prestamo();
        $prestamo4->idUsuario = 1;
        $prestamo4->idLibro = 4;
        $prestamo4->devuelto = true;
        $prestamo4->save();
    }
}
