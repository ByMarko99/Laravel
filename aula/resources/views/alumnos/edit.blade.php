@extends('layouts.plantilla')


@section('title', 'IKASLE ALDATU')

@section('content')
    <h1>IKASLEA ALDATU</h1>
    <form action="{{ route('alumnos.update', $alumno)}}" method="POST">
        @csrf
        @method('put')
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="{{old('nombre', $alumno->nombre_apellido)}}"><br>
        @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="{{old('edad', $alumno->edad)}}" ><br>
        @error('edad')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{old('telefono', $alumno->telefono)}}" ><br>
        @error('telefono')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{old('direccion', $alumno->direccion)}}" ><br>
        @error('direccion')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <input type="submit" value="Bidali">
    </form>
@endsection
