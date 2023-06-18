<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">Create Post</a>
        </div>
    </x-slot>

    <div class="container mx-auto px-4">
        @foreach ($posts as $post)
            <div class="bg-white shadow rounded-lg p-6 mb-4">
                <h2 class="text-2xl font-bold mb-2"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                <p class="text-gray-700">{{ $post->body }}</p>
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</x-app-layout>
