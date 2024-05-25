@extends('layout')

@section('title', 'Home')

@section('content')


    <section class="flex mt-5 container mx-auto">

        <form action="" method="post">
            @csrf
            <h2 class="text-xl font-medium text-gray-900 mb-3">Listing Employees</h2>
            <x-forms.input name="name" label="Name" placeholder="Enter employee name" value="{{ old('name') }}" />
            <x-forms.input name="email" label="Email Address" placeholder="Enter email address"
                value="{{ old('email') }}" />
            <x-forms.input name="city" label="City Name" placeholder="Enter city name" value="{{ old('city') }}" />

            <button type="submit"
                class="group mt-4 relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                <span
                    class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

                <span class="relative block border border-current bg-white px-8 py-3"> Submit </span>
            </button>

            @if (session()->has('status'))
                <p class="text-green-600 mt-2">{{ session('status') }}</p>
            @endif
        </form>

        <div class="flex-auto pl-5">

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email Address</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">City</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 text-center">

                        @isset($employees)

                            @foreach ($employees as $employee)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $employee->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $employee->email }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $employee->city }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <a href="{{ url('edit_employee', $employee->id) }}"
                                            class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                            Edit
                                        </a>
                                        <a href="{{ url('delete_employee', $employee->id) }}"
                                            class="inline-block rounded bg-rose-600 px-4 py-2 text-xs font-medium text-white hover:bg-rose-700">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        @endisset

                    </tbody>
                </table>
            </div>


        </div>
    </section>


@endsection
