<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videojuegos</title>
    <!-- Agregar el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            @foreach ($games as $game)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $game->imagen }}" class="card-img-top" alt="Imagen del videojuego">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game->nombre }}</h5>
                            <p class="card-text">Plataforma: {{ $game->plataforma }}</p>
                            <a class="btn btn-primary" href="{{ $game->wallapop }}" role="button">Wallapop</a>
                        </div>
                        <div class="card-footer text-muted">
                            ID: {{ $game->id }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
