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
    <h1> Biblioteca Virtual </h1>

     <div class="p-5 table-responsive">
        <table class="table caption-top">
        <caption>Lista de Usuarios</caption>
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
                <th> {{ $usuario->id }}</th>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->email }}</td>

              </tr>
            @endforeach


        </tbody>
      </table>
    </div>
</body>
</html>
