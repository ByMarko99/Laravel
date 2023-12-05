<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>

<body>

    {{-- <p>Hau da show: 
        <?php /* echo $curso; */ ?>
    </p> --}}

    <p>Hau da show:
        {{ $curso }} </p>

    @if ($curso >= 18)
        <P>Sartu zaitezke</P>
    @else ($curso < 18) 
        <p>Ezin zara sartu</p>
    @endif

    <p>Biderketa taula </p>
    @for ($i = 1; $i <= 10; $i++)
        <p>{{ $curso }} x {{ $i }} = {{ $curso * $i }}</p>
    @endfor
</body>

</html>
