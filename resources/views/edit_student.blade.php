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
            <h1>Update Student Data</h1>

            @csrf

            @method('put')

            <x-forms.input name="name" placeholder="Enter Student Name" labelText="Name"
                value="{{ $student->name }}" />

            <x-forms.input name="city" placeholder="Enter City Name" labelText="City" value="{{ $student->city }}" />

            <x-forms.input name="roll" placeholder="Enter Student Roll" labelText="Roll"
                value="{{ $student->roll }}" />

            <button
                class="mt-5 group relative inline-block text-sm font-medium text-red-600 focus:outline-none focus:ring active:text-red-500"
                type="submit">
                <span class="absolute inset-0 border border-current"></span>
                <span
                    class="block border border-current bg-white px-12 py-1.5 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1">
                    Update
                </span>
            </button>

            @if (session()->has('status'))
                <h5 class="text-green-500 mt-2">{{ session('status') }}</h5>
            @endif
        </form>


    </div>
</body>

</html>
