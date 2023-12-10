<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Lógica para obtener y mostrar todos los libros
        return view('books.index');
    }

    public function show($id)
    {
        // Lógica para obtener y mostrar un libro específico por ID
        return view('books.show', ['id' => $id]);
    }
}
