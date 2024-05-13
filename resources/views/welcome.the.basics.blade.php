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



    {{-- passing data to component --}}
    <x-card title="This is title one" caption="awesome time" class="mt-5" />
    <x-card title="This is title two" caption="the real deal" class="mt-5" />


    {{-- using anonymous component --}}
    <x-shared.button text="Sign up" />
    <x-shared.button text="Create account" />

</body>

</html>
