@extends('layouts.plantilla')


@section('title', 'IKASTAROAK INDEX')

@section('content')

    {{-- <p>Hau da show: 
        <?php /* echo $curso; */ ?>
    </p> --}}

    <p>Hau da show:
        {{ $curso }} </p>

    @if ($curso >= 18)
        <P>Sartu zaitezke</P>
    @else($curso < 18) 
    <p>Ezin zara sartu</p>
    @endif

    <p>Biderketa taula </p>
    @for ($i = 1; $i <= 10; $i++)
        <p>{{ $curso }} x {{ $i }} = {{ $curso * $i }}</p>
    @endfor
@endsection
