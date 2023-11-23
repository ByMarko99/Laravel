@extends('layouts.plantilla')


@section('title', 'IKASLE ZERRENDA')

@section('content')

    <table>

        <tr>
            <th>Izena</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>

        </tr>
        @foreach ($cursos as $curso)
            <tr>
                <td><a {{-- href="{{ route('alumnos.show', $alumno) }}" --}}> {{ $curso->nombre }}</a>
                </td>
                <td>{{ $curso->nivel }}</td>
                <td>{{ $curso->horasAcademicas }}</td>
                <td>{{ $curso->profesor->nombreApellido }}</td>
                <td><a {{-- href="{{ route('alumnos.edit', $alumno) }}" --}}>Editatu</a></td>
                <td><a {{-- href="{{ route('alumnos.delete', $alumno) }}" --}}>Ezabatu</a></td>
            </tr>
        @endforeach

    </table>

{{--     {{$cursos->links()}}
 --}}   {{--  <h1>IKASLE ZERRENDA</h1>
    <ol>
        @foreach ($alumnos as $alumno)
            <li> <a href="{{ route('alumnos.show', $alumno) }}"> {{ $alumno->nombre_apellido }} - {{ $alumno->edad }} </a>
            </li>
            <br>
            <a href="{{ route('alumnos.edit', $alumno) }}"
                style="color: #4A4A4A; text-decoration: none; background-color: #D9D9D9; padding: 10px 20px; border-radius: 5px; font-size: 14px;">Editatu</a>
            <br>
            <br>
            <a href="{{ route('alumnos.delete', $alumno) }}"
                style="color: #d42828; text-decoration: none; background-color: #D9D9D9; padding: 10px 20px; border-radius: 5px; font-size: 14px;">Ezabatu</a>
        @endforeach
    </ol>
    <br> --}}

@endsection
