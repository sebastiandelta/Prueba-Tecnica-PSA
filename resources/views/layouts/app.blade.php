<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de Nómina</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light sidebar" style="width: 250px;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="listasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Listas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="listasDropdown">
                        <a class="dropdown-item" href="{{ url('/empleados') }}">Empleados</a>
                        <a class="dropdown-item" href="{{ url('/cargos') }}">Cargos</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Contenido principal -->
        <div class="flex-fill p-4">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
