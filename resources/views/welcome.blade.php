<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Query builder</h1>

    @isset($students)
        @foreach ($students as $student)
            {{ $student->name }}
            <br>
        @endforeach
    @endisset
</body>

</html>
