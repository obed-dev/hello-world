<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class prestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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


        Prestamo::factory(42)->create();
    }
}
