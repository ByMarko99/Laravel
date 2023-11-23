<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesors";

    protected $primaryKey = "id";

    protected $fillable = ['nombreApellido', 'profesion', 'gradoAcademico', 'telefono'];

    protected $hidden = [ 'id'];

    public function cursos(){

        return $this->hasMany(Curso::class);

        }
}
