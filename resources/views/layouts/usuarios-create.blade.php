


    @extends('usuarios')

    @section('content')
        <div class="container">
            <h2>Crear Usuario</h2>
            {{-- <form action="{{ route('usuarios-store') }}" method="post"> --}}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            </form>
        </div>
    @endsection



