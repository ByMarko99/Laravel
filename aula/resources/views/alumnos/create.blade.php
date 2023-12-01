@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <h1>NUEVO ALUMNO</h1>
    <form action="{{ route('alumnos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre_apellido">Nombre y Apellido</label>
        <input type="text" name="nombre_apellido" value="{{old('nombre_apellido')}}" placeholder="Nombre y Apellido"><br>
        @error('nombre_apellido')
           <p class="akatsa"><strong>{{$message}}</strong></p>
        @enderror
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="{{old('edad')}}" placeholder="Edad" ><br>
        @error('edad')
           <p class="akatsa"><strong>{{$message}}</strong></p>
           @enderror
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{old('telefono')}}" placeholder="Telefono" ><br>
        @error('telefono')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{old('direccion')}}" placeholder="Direccion" ><br>
        @error('direccion')
        <p class="akatsa"><strong>{{$message}}</strong></p>
     @enderror
     <label for="foto">Argazkia</label>
     <input type="file" name="foto" id="foto" value="{{old('foto')}}" accept="image/*">
     @error('foto')
     <p class="akatsa"><strong>{{$message}}</strong></p>
  @enderror
        <input type="submit" value="Bidali">
    </form>
@endsection
