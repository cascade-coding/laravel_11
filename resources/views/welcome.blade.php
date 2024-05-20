<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @vite('resources/css/app.css')

    <style>
        /* body>nav>div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between>div:nth-child(2) {
            display: none;
        } */
    </style>
</head>

<body>
    <div class="container mx-auto mt-5">

        <h1>Pagination in laravel</h1>

        <hr>

        @foreach ($students as $student)
            <h5>{{ $student->name }}</h5>
        @endforeach

        <hr>

        <div class="mt-5">
            {{ $students->links() }}
        </div>

    </div>

</body>

</html>
