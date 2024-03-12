<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$game->titulo}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Detalhes de <b>{{ $game->titulo }}</b>
            </div>
        </div>

        <div class="card-body">
            <p><strong>ID: </strong>{{ $game->id }}</p>
            <p><strong>Título: </strong>{{ $game->titulo }}</p>
            <p><strong>Gênero: </strong>{{ $game->genero }}</p>
            <p><strong>História: </strong>{{ $game->lore }}</p>
            <p><strong>Lançamento: </strong>{{ $game->anoLancamento }}</p>
            <br>
            <a class="btn btn-success" href="{{route('games.index')}}">Retornar</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>