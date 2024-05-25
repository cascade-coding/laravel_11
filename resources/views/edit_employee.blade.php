@extends('layout')

@section('title', 'Edit Record')

@section('content')


    <section class="flex mt-5 container mx-auto">

        <form action="" method="post">
            @csrf
            @method('put')
            <h2 class="text-xl font-medium text-gray-900 mb-3">Listing Employees</h2>
            <x-forms.input name="name" label="Name" placeholder="Enter employee name" value="{{ $employee->name }}" />
            <x-forms.input name="email" label="Email Address" placeholder="Enter email address"
                value="{{ $employee->email }}" />
            <x-forms.input name="city" label="City Name" placeholder="Enter city name" value="{{ $employee->city }}" />

            <button type="submit"
                class="group mt-4 relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                <span
                    class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

                <span class="relative block border border-current bg-white px-8 py-3"> Update </span>
            </button>
        </form>

    </section>


@endsection
