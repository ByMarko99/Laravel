@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <h1>NUEVO ALUMNO</h1>
    <form action="{{ route('alumnos.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="" placeholder="Nombre y Apellido" required><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="" placeholder="Edad" required><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="" placeholder="Telefono" required><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="" placeholder="Direccion" required><br>
        <input type="submit" value="Bidali">
    </form>
@endsection
