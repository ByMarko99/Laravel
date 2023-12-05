@extends('layouts.plantilla')


@section('title', 'IKASLE ALDATU')

@section('content')
    <h1>IKASLEA ALDATU</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="{{old('nombre', $curso->nombre) }}"><br>
         @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="nivel">Nivel</label>
        <select name="nivel" id="nivel">
            <option value="Básico" @if (old($curso->nivel) == 'Básico') selected @endif>Básico</option>
            <option value="Cambridge" @if (old($curso->nivel) == 'Cambridge') selected @endif>Cambridge</option>
            <option value="Lituano Avanzado" @if (old($curso->nivel) == 'Lituano Avanzado') selected @endif>Lituano Avanzado</option>
        </select><br>
        @error('nivel')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="horasAcademicas">Horas Academicas</label>
        <input type="text" name="horasAcademicas" value="{{ $curso->horasAcademicas }}"><br>
        {{--  @error('telefono')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}
        <label for="profesor">Profesor</label>
        <select name="profesor_id" id="profesor">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}" @if ($profesor->id == $curso->profesor_id) selected @endif>
                    {{ $profesor->nombreApellido }}</option>
            @endforeach
            {{--  @error('direccion')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}
            <input type="submit" value="Bidali">
    </form>
@endsection
