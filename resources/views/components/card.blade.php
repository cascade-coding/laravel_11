<div>
    <h2>{{ $title }}</h2>
    <h4>{{ $caption }}</h4>
    <p>card description {{ $add(40) }}</p>
    {{-- <h5 {{ $attributes }}>{{ $attributes }}</h5> --}}
    <h5 {{ $attributes->merge(['class' => 'pt-2']) }}>{{ $attributes }}</h5>
</div>
<hr>
