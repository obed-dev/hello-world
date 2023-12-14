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
    <h1> Listado de Libros en Biblioteca </h1>

     <div class="p-5 table-responsive">
        <table class="table caption-top ">
        <a href="usuarios"> <h2 >Listado de Usuarios</h2></a>
        <thead >
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>


          </tr>
        </thead>

        <tbody class="table-group-divider" >

        @foreach($libros as $libro)
            <tr>
                <th> {{ $libro->id }}</th>
                <td>{{ $libro->nombre }}</td>

              </tr>
            @endforeach


        </tbody>
      </table>
    </div>

</body>
</html>
