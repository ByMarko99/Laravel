@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <h1>NUEVO CURSO</h1>
    <form action="{{ route('cursos.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" placeholder="Nombre y Apellido"><br>
     {{--    @error('nombre')
           <p class="akatsa"><strong>{{$message}}</strong></p>
        @enderror --}}
        <label for="nivel">Nivel</label>
        <select name="nivel" id="nivel">
            <option value="Básico">Básico</option>
            <option value="Cambridge">Cambridge</option>
            <option value="Lituano Avanzado">Lituano Avanzado</option>
        </select><br>
      {{--   @error('edad')
           <p class="akatsa"><strong>{{$message}}</strong></p>
           @enderror --}}
        <label for="horasAcademicas">Horas Academicas</label>
        <input type="text" name="horasAcademicas"  placeholder="Horas Academicas" ><br>
     {{--    @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}
        <label for="profesor">Profesor</label>
        <select name="profesor_id" id="profesor">
            @foreach($profesores as $profesor)
                <option value="{{ $profesor->id }}">{{ $profesor->nombreApellido }}</option>
            @endforeach
      {{--   @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}
        <input type="submit" value="Bidali">
    </form>
@endsection
