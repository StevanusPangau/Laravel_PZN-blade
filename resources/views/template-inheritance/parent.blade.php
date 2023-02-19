<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Aplikasi - @yield('tittle')</title>
</head>

<body>
    {{-- @yield('header')

    @yield('content') --}}

    {{-- membuat default section, mengunakan @section dan di tutup dengan @show --}}
    @section('header')
    <p>Default Header</p>
    @show

    @section('content')
    <p>Default Content</p>
    @show
</body>

</html>