<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" required
                       class="border border-gray-300 rounded-md px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="body" class="block text-gray-700 font-medium">Body</label>
                <textarea id="body" name="body" rows="3" required
                          class="border border-gray-300 rounded-md px-4 py-2 w-full"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</x-app-layout>
