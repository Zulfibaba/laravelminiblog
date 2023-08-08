<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mb-5  bg-#ccc-500 text-white  py-2 px-4 ">
            @if (session()->has('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                            <thead
                                class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-white-700 dark:text-gray-400 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Body
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $post->user->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $post->body }}
                                        </td>

                                        <td class="px-6 py-4">
                                            <a href="{{ url('post/edit', $post->id) }}"
                                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ url('post/delete', $post->id) }}"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
