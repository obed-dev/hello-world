<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


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
    }
}
