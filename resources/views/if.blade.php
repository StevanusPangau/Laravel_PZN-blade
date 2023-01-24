<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Encoding</title>
</head>

<body>
    @if (count($hobbies) == 1)
    <h1>I Have One Hobbiy!</h1>
    @elseif(count($hobbies) > 1)
    <h1>I Have Multiple Hobbies!</h1>
    @else
    <h1>I Don't Have Any Hobbie!</h1>
    @endif
</body>

</html>