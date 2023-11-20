@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <h1>NUEVO ALUMNO</h1>
    <form action="{{ route('alumnos.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre y Apellido"><br>
        @error('nombre')
           <p class="akatsa"><strong>{{$message}}</strong></p>
        @enderror
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="{{old('edad')}}" placeholder="Edad" ><br>
        @error('edad')
           <p class="akatsa"><strong>{{$message}}</strong></p>
           @enderror
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{old('telefono')}}" placeholder="Telefono" ><br>
        @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{old('direccion')}}" placeholder="Direccion" ><br>
        @error('nombre')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <input type="submit" value="Bidali">
    </form>
@endsection
