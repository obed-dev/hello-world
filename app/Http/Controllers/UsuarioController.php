<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function create()
    {

        return view('layouts/usuarios-create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
        ]);

        $usuario = new Usuario();

        $usuario->nombre =  $request->get('nombre');
        $usuario->email =  $request->get('email');;


        Usuario::create($request->all());
        return redirect()->route('usuarios')->with('success', 'Usuario creado exitosamente');
    }

    public function show(Usuario $usuario)
    {
        return view('layouts/usuarios-show', ['usuario' => $usuario]);
    }

    public function edit(Usuario $usuario)
    {
        return view('layouts/usuarios-edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,'.$usuario->id,
        ]);

        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
