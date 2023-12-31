<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Vista creada en blade y llamada desde el controlador</h1>
    <p><a href="{{ route('gamesCreate') }}">Nuevo videojuego</a></p>
    <h2>Lista de videojuegos:</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game )
            <tr>
                <td>{{ $game->id }}</td>
                <td><a href="{{ route('viewGame', $game->id) }}">{{ $game->name }}</a></td>
                <td>{{ $game->category_id }}</td>
                <td>{{ $game->created_at }}</td>
                <td>
                    @if ($game->active)
                    <span style="color: green">Activo</span>
                    @else
                    <span style="color: red">Inactivo</span>
                @endif
                </td>
                <td><a href="{{  route('deleteGame',$game->id) }}">Eliminar</a></td>
                
            </tr>
            @empty
                <tr>
                    <td>Sin Videojuegos</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>

</body>

</html>
