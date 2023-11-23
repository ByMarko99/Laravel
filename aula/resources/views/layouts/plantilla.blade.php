<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}/">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    @include('partials.menu')
    <main role="main" class="container">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
