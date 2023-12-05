<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    //
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos')); // compact('curso') = ['curso' => $curso]
    }

    public function show(Alumno $alumno)
    {
/*         $alumno_encontrado = Alumno::find($alumno);
 */

        return view('alumnos.show', compact('alumno'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        //return $request;
        $alumno = new Alumno();
        $alumno->nombre_apellido = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    public function edit(Alumno $alumno)
    {
/*         $alumno_encontrado = Alumno::find($alumno);
 */

        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        //return $request . "<br>".$alumno;
        $alumno->nombre_apellido = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show', $alumno);
    }
}
