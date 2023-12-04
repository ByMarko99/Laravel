<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlumno;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Support\Facades\Storage;

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
       /*  $alumno = new Alumno();
        $alumno->nombre_apellido = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;

        $alumno->direccion = $request->direccion; */
        $alumno = Alumno::create($request->all());

        if($request->file('foto')){
            $url = Storage::putFile('public/alumnos', $request->file('foto'));
            $urldb = str_replace('public', 'storage', $url);
            $alumno->foto = $urldb;
            $alumno->save();

        }
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
        /* $alumno->nombre_apellido = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save(); */

        $alumno->update($request->all());

        /* if($request->file('foto')){
            $url = Storage::putFile('public/alumnos', $request->file('foto'));
            $alumno->foto = $url;
        } */
/*         $alumno->save();
 */
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

    public function alumnos_cursos(Alumno $alumno)
    {
        return view('alumnos.alumnos_cursos', compact('alumno'));
    }

    public function matrikulatu(Alumno $alumno)
    {
        $cursos = Curso::all();
        return view('alumnos.matrikulatu', compact('alumno', 'cursos'));
    }

    public function matrikulatu_store(Request $request, Alumno $alumno)
    {
        $alumno->cursos()->sync($request->cursos);
        return redirect()->route('alumnos.index');
    }
}
