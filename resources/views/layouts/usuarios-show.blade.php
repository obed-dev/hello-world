@extends('layouts/usuarios-show')

@section('content')
    <div class="container">
        <h2>Detalles del Usuario</h2>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <p><strong>Fecha de Creación:</strong> {{ $usuario->created_at }}</p>
        <p><strong>Última Actualización:</strong> {{ $usuario->updated_at }}</p>
        <a href="{{ route('usuarios') }}" class="btn btn-secondary">Volver a la lista de usuarios</a>
    </div>
@endsection

