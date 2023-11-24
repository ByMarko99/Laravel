@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <h1>NUEVO PROFESOR</h1>
    <form action="{{ route('profesores.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombreApellido" placeholder="Nombre y Apellido"><br>
     {{--    @error('nombre')
           <p class="akatsa"><strong>{{$message}}</strong></p>
        @enderror --}}
        <label for="profesion">Profesion</label>
        <select name="profesion" id="profesor">
            @foreach($profesiones as $profesion)
                <option value="{{ $profesion->profesion }}">{{ $profesion->profesion }}</option>
            @endforeach
        </select><br>
      {{--   @error('edad')
           <p class="akatsa"><strong>{{$message}}</strong></p>
           @enderror --}}
        <label for="gradoAcademico">Grado Academico</label>
        <input type="text" name="gradoAcademico"  placeholder="Grado Academico" ><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono"  placeholder="Telefono" ><br>
     {{--    @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}

      {{--   @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror --}}
        <input type="submit" value="Bidali">
    </form>
@endsection
