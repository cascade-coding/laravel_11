<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Eloquent ORM</h1>


    @foreach ($students as $student)
        <h5>{{ $student->name }}</h5>
    @endforeach
</body>

</html>
