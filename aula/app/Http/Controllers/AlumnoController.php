<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlumno;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    //
    public function index()
    {
/*         $alumnos = Alumno::all();
 */        $alumnos = Alumno::orderBy('nombre_apellido','asc')->paginate(10);

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

    public function store(StoreAlumno $request)
    {
      /*   $request->validate([
            'nombre' => 'required|min:5|max:75',
            'edad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]); */
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

    public function update(StoreAlumno $request, Alumno $alumno)
    {
       /*  $request->validate([
            'nombre' => 'required|min:5|max:75',
            'edad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]); */
        //return $request . "<br>".$alumno;
        $alumno->nombre_apellido = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show', $alumno);
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }

    public function delete(Alumno $alumno)
    {
      return view('alumnos.delete', compact('alumno'));

    }
}
