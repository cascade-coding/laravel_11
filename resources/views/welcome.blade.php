<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])
</head>

<body>

    @isset($posts)
        <div class="flex flex-wrap gap-x-4 mx-4 mt-10">
            @foreach ($posts as $post)
                <article
                    class="hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s]">
                    <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
                        <time datetime="2022-10-10" class="block text-xs text-gray-500">
                            {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                        </time>

                        <a href="#">
                            <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                                {{ $post->title }}
                            </h3>
                        </a>

                        <div class="mt-4 flex flex-wrap gap-1">
                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600">
                                Snippet
                            </span>

                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600">
                                JavaScript
                            </span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="w-64 mx-auto mt-10">
            {{-- {{ $posts->links() }} --}}
            {{ $posts->onEachSide(5)->links() }}
        </div>
    @endisset

</body>

</html>
