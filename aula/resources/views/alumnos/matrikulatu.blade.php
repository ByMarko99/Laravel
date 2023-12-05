@extends('layouts.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')

    <table>

        <tr>

            <th>Cursos</th>


        </tr>
        @foreach ($cursos as $curso)
            <tr>
                @if ($alumno->cursos->contains($curso))
                    <td>
                        <input type="checkbox" checked >
                        <label  style="text-decoration: line-through;" for="curso-{{ $curso->id }}">{{ $curso->nombre }}</label>
                    </td>
                @else
                    <td>
                        <input type="checkbox">
                        <label for="curso-{{ $curso->id }}">{{ $curso->nombre }}</label>
                    </td>
                @endif
                {{--  @if ($curso->nombre == $alumno->$curso->nombre)
            <td style="text-decoration: line-through;">{{ $curso->nombre }}</td>
            @else
            <td>{{ $curso->nombre }}</td>

            @endif --}}

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
