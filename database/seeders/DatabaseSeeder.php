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
      Libro::factory(10)->create();
      $this->call([
        usuarioSeeder:: class,
        prestamoSeeder::class

      ] );







    }
}
