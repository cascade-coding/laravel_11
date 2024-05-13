<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <x-shared.header />
    <h1>home page</h1>
    <hr>

    {{-- use component with slots --}}
    <x-shared.alert>
        <x-slot:title>Server <b>error</b></x-slot:title>
        <strong>oops something went wrong</strong>
    </x-shared.alert>

</body>

</html>
