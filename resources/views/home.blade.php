<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container mx-auto mt-5 flex justify-between">


        <form action="" method="POST" class="max-w-[300px] flex-1">
            <h1>Hanlde Student Data</h1>

            @csrf

            <x-forms.input name="name" placeholder="Enter Student Name" labelText="Name" value="{{old('name')}}"/>

            <x-forms.input name="city" placeholder="Enter City Name" labelText="City" value="{{old('city')}}"/>

            <x-forms.input name="roll" placeholder="Enter Student Roll" labelText="Roll" value="{{old('roll')}}"/>


            <button
                class="mt-5 group relative inline-block text-sm font-medium text-red-600 focus:outline-none focus:ring active:text-red-500"
                type="submit">
                <span class="absolute inset-0 border border-current"></span>
                <span
                    class="block border border-current bg-white px-12 py-1.5 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1">
                    Submit
                </span>
            </button>

            @if (session()->has('status'))
                <h5 class="text-green-500 mt-2">{{ session('status') }}</h5>
            @endif
        </form>



        <div class="overflow-x-auto flex-auto pl-5">
            <table class="min-w-full divide-y-2 text-center divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">City</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Roll</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @isset($students)
                        @foreach ($students as $student)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $student->name }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $student->city }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $student->roll }}</td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <a href="{{ url('/edit_student', $student->id) }}"
                                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                        Edit
                                    </a>
                                    <a href="{{ url('/delete_student', $student->id) }}"
                                        class="inline-block rounded bg-rose-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
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
</body>

</html>
