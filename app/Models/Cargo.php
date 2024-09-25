<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'identificacion',
        'area',
        'cargo',
        'rol',
        'jefe_id',
    ];
    public function jefe()
    {
        return $this->belongsTo(Empleado::class, 'jefe_id');
    }
}
