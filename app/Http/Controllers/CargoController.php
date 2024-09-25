<?php

namespace App\Http\Controllers;

use App\Models\Cargo; // Asegúrate de importar el modelo Cargo
use App\Models\Empleado; // Asegúrate de importar el modelo Empleado
use Illuminate\Http\Request;

class CargoController extends Controller
{
    // Muestra la lista de cargos
    public function index()
    {
        $cargos = Cargo::all(); // Obtener todos los cargos
        $empleados = Empleado::all(); // Obtener todos los empleados

        return view('cargos.index', compact('cargos', 'empleados')); // Pasar los datos a la vista
    }

    // Almacena un nuevo cargo
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'identificacion' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'rol' => 'required|string|max:255',
            'jefe_id' => 'nullable|exists:empleados,id', // Asegúrate de que jefe_id esté relacionado correctamente
        ]);

        $cargo = new Cargo();
        $cargo->nombre = $request->nombre;
        $cargo->identificacion = $request->identificacion;
        $cargo->area = $request->area;
        $cargo->cargo = $request->cargo;
        $cargo->rol = $request->rol;
        $cargo->jefe_id = $request->jefe_id; // Guarda el id del jefe si existe
        $cargo->save();

        return redirect()->route('cargos.index')->with('success', 'Cargo creado exitosamente.');
    }

    // Muestra el formulario para editar un cargo
    public function edit(Cargo $cargo)
    {
        return response()->json($cargo);
    }

    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        return response()->json($cargo);
    }

    // Actualiza un cargo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'identificacion' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'rol' => 'required|string|max:255',
            'jefe_id' => 'nullable|exists:empleados,id', // Ajusta esto según tu tabla de empleados
        ]);

        $cargo = Cargo::findOrFail($id);
        $cargo->update($request->all());

        return response()->json(['success' => 'Cargo actualizado exitosamente.']);
    }

    // Elimina un cargo
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        return redirect()->route('cargos.index')->with('success', 'Cargo creado exitosamente.');
    }
}
