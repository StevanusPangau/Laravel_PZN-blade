<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raw PHP</title>
</head>

<body>
    {{-- Di blade kita bisa langsung menggunakan sysntax php dengan contoh seperti dibawah --}}
    @php
    class Person{
    public string $name;
    public string $address;
    }

    $person = new Person();
    $person->name = "Evan";
    $person->address = "Indonesia"
    @endphp

    <p>{{ $person->name }}</p>
    <p>{{ $person->address }}</p>
</body>

</html>