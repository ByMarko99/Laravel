@extends('layouts.plantilla')

@section('title', 'IKASLE ERAKUTSI')

@section('content')
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
        <ul style="list-style-type: none; padding: 0;">
            <h2 style="margin-bottom: 20px;">IKASLE: {{ $alumno->nombre_apellido }}</h2>

            @if($alumno->foto)
            <img src="{{ url($alumno->foto)  }}" alt="" style="width: 200px; height: 200px; margin-top: 20px;">
            @else
            <img src="{{ url('storage/alumnos/default.jpg') }}" alt="" style="width: 200px; height: 200px; margin-top: 20px;">
@endif
            <li style="margin-bottom: 10px;"> Izena: {{ $alumno->nombre_apellido }} </li>
            <li style="margin-bottom: 10px;"> Adina: {{ $alumno->edad }} </li>
            <li style="margin-bottom: 10px;"> Telefonoa: {{ $alumno->telefono }} </li>
            <li style="margin-bottom: 20px;"> Direcciona: {{ $alumno->direccion }} </li>
            <a href="{{ route('alumnos.edit', $alumno) }}"
                style="background-color: #04AA6D; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Editatu</a>
        </ul>
    </div>
@endsection
