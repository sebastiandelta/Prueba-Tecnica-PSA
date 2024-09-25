<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="miModalLabel">Crear/Editar Cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="cargoForm" method="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="identificacion">Identificación</label>
                        <input type="text" name="identificacion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" name="area" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" name="cargo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <input type="text" name="rol" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jefe_id">Jefe</label>
                        <select name="jefe_id" class="form-control">
                            <option value="">Sin jefe</option>
                            @foreach ($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombres }} {{ $empleado->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="_method" value="PUT" id="methodInput">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
