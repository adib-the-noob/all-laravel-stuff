<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    {{-- @if ($name == "adib")
        <p>Hello, {{ $name }}</p>
    @endif --}}
    
    @unless ($name == "adib")
        <p>Hello, {{ $name }}, you are not admin!</p>
    @endunless
    <br>
    <h1>Is Set Block!</h1>
    @isset($is_set_name)
        <p>Hello, {{ $name }}</p>
    @endisset
    <br>
    @for ($i = 0; $i < 3; $i++)
        <p>{{ $i }}</p>
    @endfor
    <br>
    @foreach ($students as $student)
        <p>{{ $student }}</p>
    @endforeach

</body>
</html>