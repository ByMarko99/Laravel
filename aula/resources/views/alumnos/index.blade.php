@extends('layouts.plantilla')


@section('title', 'IKASLE ZERRENDA')

@section('content')
    <h1>IKASLE ZERRENDA</h1>
    <ol>
    @foreach ($alumnos as $alumno)
     <li> <a href="{{route('alumnos.show', $alumno)}}"> {{$alumno->nombre_apellido}} - {{$alumno->edad}} </a> </li>
   <a href="{{route('alumnos.edit', $alumno)}}">Editatu</a>

    @endforeach
    </ol>
@endsection
