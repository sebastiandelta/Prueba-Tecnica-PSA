<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de Nómina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> <!-- DataTables CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> <!-- Estilos adicionales -->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5 class="sidebar-heading">Navegación</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#listasSubmenu" data-toggle="collapse">
                                Listas
                            </a>
                            <ul class="collapse" id="listasSubmenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cargos.index') }}">Cargos</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> <!-- DataTables JS -->
    @stack('scripts') <!-- Asegúrate de incluir esto para los scripts adicionales -->
</body>
</html>
