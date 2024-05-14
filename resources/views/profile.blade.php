<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body>
    <h1>Profile page</h1>

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <img src="{{ asset('images/forest.jpg') }}" alt="" width="400">

    @vite('resources/js/app.js')
</body>

</html>
