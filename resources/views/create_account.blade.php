<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div>
        <h1>Create account</h1>
        <form action="" method="post">
            @csrf
            Name: <input type="text" name="name" id="name" value="{{ old('name') }}"> <br>
            Email: <input type="text" name="email" id="email" value="{{ old('email') }}"> <br>
            Password: <input type="text" name="password" id="password" value="{{ old('password') }}"> <br>
            <br>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{-- <br> --}}
                    <p>{{ $error }}</p>
                @endforeach
            @endif
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
