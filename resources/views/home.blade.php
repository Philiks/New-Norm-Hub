<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-3 gap-5 px-5">
            @livewire('display-featured-blog')
        </div>
    </div>
</x-app-layout>
