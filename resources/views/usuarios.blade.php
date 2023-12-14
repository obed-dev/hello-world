<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <title>Biblioteca CRUD </title>
</head>
<body>

    <style>
       h1 {
        text-align: center
       }


</style>
    <h1> Biblioteca Virtual </h1>

     <div class="p-5 table-responsive">
        <table class="table caption-top ">
        <h2>Listado de Usuarios</h2>
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>

          </tr>
        </thead>

        <tbody class="table-group-divider" >

        @foreach($usuarios as $usuario)
            <tr>
              <a href="{{route ('usuarios-show' , $usuario)}}"> {{ $usuario->id }} </a>

                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->email }}</td>

              </tr>
            @endforeach


        </tbody>
      </table>
      {{-- {{$usuarios -> links() }} --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
