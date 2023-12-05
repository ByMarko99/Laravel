<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;


    protected $table = "alumnos";

    protected $primaryKey = "id";

/*     protected $fillable = ['nombre_apellido', 'edad', 'telefono', 'direccion', 'foto'];
 */
protected $guarded = ['foto'];
    protected $hidden = ['id'];
}
