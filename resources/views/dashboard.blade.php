<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if (session()->has('status'))
            <aside id="popup"
                class="fixed bottom-4 end-4 z-50 flex items-center justify-center gap-4 rounded-lg bg-black px-5 py-3 text-white">
                <a href="#" target="_blank" rel="noreferrer" class="text-sm font-medium hover:opacity-75">
                    {{ session('status') }}
                </a>
            </aside>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl mb-5">
                        All Post Data
                    </h1>


                    @isset($posts)
                        <div class="overflow-x-auto rounded-lg border border-gray-200">
                            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                <thead class="ltr:text-left rtl:text-right">
                                    <tr>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Body</th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 text-center">
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $post->name }}</td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $post->title }}</td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $post->body }}</td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">

                                                <a class="inline-block rounded border border-orange-600 bg-orange-600 px-10 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-orange-600 focus:outline-none focus:ring active:text-orange-500"
                                                    href="{{ route('post_edit', ['id' => $post->id]) }}">
                                                    Edit
                                                </a>

                                                @can('isAdmin')
                                                    <a class="inline-block rounded border border-rose-600 bg-rose-600 px-10 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-rose-600 focus:outline-none focus:ring active:text-rose-500"
                                                        href="{{ route('post_delete', ['id' => $post->id]) }}">
                                                        Delete
                                                    </a>
                                                @endcan


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
