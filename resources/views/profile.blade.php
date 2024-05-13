<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <h1>Profile page</h1>

    {{-- displaying variable --}}
    @isset($name)
        {{ $name }}
    @endisset

    @empty($name)
        <h4>No name found!</h4>
    @endempty

    {{-- calling function --}}
    <h5>SQRT {{ sqrt(25) }}</h5>

    {{-- if statement --}}
    @if ($name === 'Jhon')
        <h4>this is the default name</h4>
    @elseif($name === 'David')
        <h4>this is a default name</h4>
    @else
        <h4>A new name</h4>
    @endif

    {{-- unless directive --}}
    @unless ($name === 'Jhon')
        <h4>You are not the admin</h4>
    @endunless

    {{-- only for production --}}
    @production
        <h1>only execute in production</h1>
    @endproduction

    {{-- env stages --}}
    @env('local')
    <h4>only for local env</h4>
    @endenv

    @env(['local', 'staging'])
    <h4>only for local and staging env</h4>
    @endenv

    {{-- switch statement --}}
    @switch('php')
        @case('laravel')
            <h1>laravel is clean</h1>
        @break

        @case('php')
            <h2>php is not clean</h2>
        @break

        @default
            <h2>didn't match</h2>
    @endswitch

    {{-- loops --}}
    @for ($i = 0; $i < 10; $i++)
        <h4>for loop i is :{{ $i }}</h4>
    @endfor

    @foreach ($users as $user)
        <h5>User name is {{ $user }}</h5>
        @if ($loop->last)
            <h4>all names are printed</h4>
            {{-- {{print_r($loop)}} --}}
        @endif
    @endforeach

    <hr>

    @forelse($users as $user)
        <h5>User name is {{ $user }}</h5>
    @empty
        <h4>no users found</h4>
    @endforelse

    @while (true)
        <h1>going forever</h1>
    @break
@endwhile
</body>

</html>
