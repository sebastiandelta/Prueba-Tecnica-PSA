@extends('layouts.app')

@section('content')
    <h2>Cargos</h2>

    <button type="button" class="btn btn-primary" id="crearCargoBtn">
        Crear Cargo
    </button>

    <table id="cargosTable" class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Área</th>
                <th>Cargo</th>
                <th>Rol</th>
                <th>Jefe</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->nombre }}</td>
                    <td>{{ $cargo->identificacion }}</td>
                    <td>{{ $cargo->area }}</td>
                    <td>{{ $cargo->cargo }}</td>
                    <td>{{ $cargo->rol }}</td>
                    <td>
                        @if ($cargo->jefe_id)
                            {{ $empleados->find($cargo->jefe_id)->nombres }} {{ $empleados->find($cargo->jefe_id)->apellidos }}
                        @else
                            Sin jefe
                        @endif
                    </td>
                    <td>
                        <button onclick="editarCargo({{ $cargo->id }})" class="btn btn-warning">Editar</button>
                        <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('cargos.modal')
    <script>
        $(document).ready(function () {
            alert()
            $('#cargosTable').DataTable();

            $('#crearCargoBtn').on('click', function () {
                $('#miModal').modal('show');
            });
            $('#miModal').modal('show');


            $('#cargoForm').on('submit', function (e) {
    e.preventDefault(); // Prevenir la acción por defecto del formulario

    let id = $(this).data('id'); // Obtén el ID del cargo a editar

    $.ajax({
        url: id ? `/cargos/${id}` : '{{ route('cargos.store') }}', // URL para la solicitud de creación o actualización
        type: id ? 'PUT' : 'POST', // Método de la solicitud
        data: $(this).serialize(), // Serializa los datos del formulario
        success: function (response) {
            $('#miModal').modal('hide'); // Cierra el modal
            location.reload(); // Recarga la página para ver el cargo actualizado
        },
        error: function (xhr) {
            // Manejar errores
            let errors = xhr.responseJSON.errors;
            console.log(errors);
            // Aquí puedes mostrar errores en la interfaz
        }
    });
            });
        });

        function editarCargo(id) {
    $.get(`/cargos/${id}`, function (data) {
        // Asigna los valores del cargo a los campos del formulario
        $('#cargoForm input[name="nombre"]').val(data.nombre);
        $('#cargoForm input[name="identificacion"]').val(data.identificacion);
        $('#cargoForm input[name="area"]').val(data.area);
        $('#cargoForm input[name="cargo"]').val(data.cargo);
        $('#cargoForm input[name="rol"]').val(data.rol);
        $('#cargoForm select[name="jefe_id"]').val(data.jefe_id);
        
        // Establece el ID en el formulario para la actualización
        $('#cargoForm').data('id', data.id);
        
        // Muestra el modal
        $('#miModal').modal('show');
    });
}
    </script>
@endsection

