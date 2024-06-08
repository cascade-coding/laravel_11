<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


    @if (session()->has('status'))
        <aside id="popup"
            class="fixed bottom-4 end-4 z-50 flex items-center justify-center gap-4 rounded-lg bg-black px-5 py-3 text-white">
            <a href="#" target="_blank" rel="noreferrer" class="text-sm font-medium hover:opacity-75">
                {{ session('status') }}
            </a>
        </aside>
    @endif


    <form action="" method="POST" class="max-w-md mx-auto mt-10">
        @csrf

        <div class="mt-5">
            <label for="title" class="block text-lg font-medium text-gray-700 dark:text-white"> Title </label>

            <input type="text" id="title" placeholder="title"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" name="title" />
        </div>

        <div class="mt-5">
            <label for="body" class="block text-lg font-medium text-gray-700 dark:text-white"> Body </label>

            <textarea id="body" placeholder="what's on your mind"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" name="body" cols="30" rows="5"></textarea>
        </div>


        <button type="submit"
            class="mt-5 group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
            <span
                class="absolute inset-0 translate-x-0 translate-y-0 bg-indigo-600 transition-transform group-hover:translate-x-0.5 group-hover:translate-y-0.5"></span>

            <span class="relative block border border-current bg-white px-8 py-3">Add</span>
        </button>

    </form>


</x-app-layout>
