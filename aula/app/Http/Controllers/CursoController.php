<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Profesor;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
               $cursos = Curso::all();
               return view('cursos.index', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesores = Profesor::all(); // Assuming you have a Profesor model
        return view('cursos.create', compact('profesores'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurso $request)
    {

    /*             dd($request);
 */   /*      $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save(); */
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        $profesores = Profesor::all(); // Assuming you have a Profesor model

        return view('cursos.edit', compact('curso', 'profesores'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCurso $request, Curso $curso)
    {
        /* $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;
        $curso->profesor_id = $request->profesor_id; */

        $curso->update($request->all());
/*         $curso->save();
 */
        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function cursos_alumnos(Curso $curso)
    {
        return view('cursos.cursos_alumnos', compact('curso'));
    }
}
