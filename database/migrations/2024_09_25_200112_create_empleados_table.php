<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('identificacion')->unique();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('ciudad_nacimiento');
            $table->boolean('es_presidente')->default(false); // Columna para identificar al presidente
            $table->foreignId('jefe_id')->nullable()->constrained('empleados'); // Relación con jefe
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
