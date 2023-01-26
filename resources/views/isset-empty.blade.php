<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Encoding</title>
</head>

<body>
    <p>
        {{-- Isset digunakan untuk mengecek apakah sebuah variable ada dan tidak bernilai nulll --}}
        @isset($name)
        Hello, my name is {{ $name }}
        @endisset
    </p>
    <p>
        {{-- empty digunakan untuk mengecek apakah sebuah variable merupakan array kosong --}}
        @empty($hobbies)
        I don't have any hobbies.
        @endempty
    </p>
</body>

</html>