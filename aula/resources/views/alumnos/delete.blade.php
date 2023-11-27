@extends('layouts.plantilla')


@section('title', 'IKASLE ZERRENDA')

@section('content')
    <h1>IKASLE ezbatu</h1>



    {{--  <a  style="color: rgb(255, 255, 255); text-decoration: none; background-color: #0c24dc; padding: 10px 20px; border-radius: 5px; cursor: pointer;" href="{{route ('alumnos.index')}}">EZ</a>
        <br>        <br>
        <br>
 --}}
    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST">
        @csrf
        @method('DELETE')
        <a style="color: rgb(255, 255, 255); text-decoration: none; background-color: #0c24dc; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
            href="{{ route('alumnos.index') }}">EZ</a>
        <br>
        <br>

        <button
            style="color: rgb(255, 255, 255); text-decoration: none; background-color: #dc0c0c; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
            type="submit">BAI</button>

    </form>


@endsection
