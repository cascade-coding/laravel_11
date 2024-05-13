@php
    $colors = ['red', 'green', 'blue', 'yello', 'teal', 'brown', 'tan'];
@endphp
<x-shared.layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <h1>welcome page</h1>
    @foreach ($colors as $color)
        <h4>{{ $color }}</h4>
    @endforeach
</x-shared.layout>
