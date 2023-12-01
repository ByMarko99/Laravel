@extends('layouts.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')

    <table>

        <tr>

            <th>Cursos</th>
            <th>&nbsp;</th>


        </tr>
        @foreach ($alumno->cursos as $curso)

        <tr>
            <td>{{ $curso->nombre }}</td>
            <td><a href="{{ route('cursos.cursos_alumnos', $curso) }}" class="button-style">Alumnos del Curso</a></td>
        </tr>
    @endforeach

    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

   {{--  <h1>IKASLE ZERRENDA</h1>
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
