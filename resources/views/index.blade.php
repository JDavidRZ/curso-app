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
    <h2>Lista de videojuegos:</h2>
    @forelse ($games as $item)
        <li>{{ $item }}</li>
    @empty
    <li>No hay datos</li>
    @endforelse
</body>

</html>
