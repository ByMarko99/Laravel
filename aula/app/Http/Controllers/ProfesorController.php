<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesiones = Profesor::select('profesion')->distinct()->get();

        return view('profesores.create', compact('profesiones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $profesor = new Profesor();
        $profesor->nombreApellido = $request->nombreApellido;
        $profesor->profesion = $request->profesion;
        $profesor->gradoAcademico = $request->gradoAcademico;
        $profesor->telefono = $request->telefono;

        $profesor->save();
        return redirect()->route('profesores.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {

        $cursoDelProfesor = $profesor->cursos;
        if ($cursoDelProfesor->isNotEmpty()) {
            return redirect()->route('profesores.index')->with('error', 'No se puede eliminar el profesor porque tiene cursos asignados');
        }else{
            $profesor->delete();
            return redirect()->route('profesores.index') ->with('success', 'Profesor eliminado correctamente');
        }

    }
}
