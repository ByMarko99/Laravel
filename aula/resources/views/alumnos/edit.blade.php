@extends('layouts.plantilla')


@section('title', 'IKASLE ALDATU')

@section('content')
    <h1>IKASLEA ALDATU</h1>
    <form action="{{ route('alumnos.update', $alumno)}}" method="POST">
        @csrf
        @method('put')
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="{{$alumno->nombre_apellido}}"><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="{{$alumno->edad}}" ><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{$alumno->telefono}}" ><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{$alumno->direccion}}" ><br>
        <input type="submit" value="Bidali">
    </form>
@endsection
