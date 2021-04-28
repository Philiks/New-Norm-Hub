<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($blog->title) }}
        </h2>
    </x-slot>

    @livewire('display-blog', ['blog' => $blog])
</x-app-layout>
