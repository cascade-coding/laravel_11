<div>
    <hr>
    <a href="{{ route('welcome') }}">Home</a>
    <a href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('about') }}">About</a>
    <h5 class="text-purple-500">Post categories</h5>
    {{-- <a href="{{ route('post', ['category'=>'science']) }}">Science</a> --}}
    <a href="{{ route('post', ['category' => 'science', 'p' => 2]) }}">Science</a>
</div>
