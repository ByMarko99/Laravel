@extends('layouts.plantilla')


@section('title', 'IKASLE ERAKUTSI')

@section('content')
    <h2>IKASLE: {{$alumno->nombre_apellido}}</h2>
<ul>

    <li> Izena: {{$alumno->nombre_apellido}} </li>
    <li> Adina: {{$alumno->edad}} </li>
    <li> Telefonoa: {{$alumno->telefono}} </li>
    <li> Direcciona: {{$alumno->direccion}} </li>
     <a href="{{route('alumnos.edit', $alumno)}}">Editatu</a>

</ul>

@endsection
