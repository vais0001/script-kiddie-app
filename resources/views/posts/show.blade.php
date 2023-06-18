<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">{{ $post->title }}</h2>
            <p class="text-gray-700">{{ $post->body }}</p>
        </div>
    </div>
</x-app-layout>
