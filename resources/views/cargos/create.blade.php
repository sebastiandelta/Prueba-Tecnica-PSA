<!-- resources/views/cargos/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Nuevo Cargo</h1>
    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
        </div>
        <div class="form-group">
            <label for="area">Área</label>
            <input type="text" class="form-control" id="area" name="area" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" required>
        </div>
        <div class="form-group">
            <label for="jefe">Jefe</label>
            <select class="form-control" id="jefe" name="jefe_id">
                <option value="">Seleccione un jefe</option>
                <!-- Aquí se llenarán los jefes disponibles -->
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear Cargo</button>
        <a href="{{ route('cargos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
