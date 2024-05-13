@extends('layout.layout')

@section('title', 'Home')

{{-- @section('header')
    <h2>overriding default content</h2>
@endsection --}}

@section('header')
    @parent
    <h2>appending data to the default content</h2>
@endsection

@section('main-content')
    <main>
        <section class="home">
            <h1>Welcome Home</h1>
        </section>
    </main>
@endsection
