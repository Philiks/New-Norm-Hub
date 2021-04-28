<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publish your amazing story today!') }}
        </h2>
    </x-slot>

    <x-card>
        <!-- Validation Errors -->
        <x-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="flex items-center justify-end">
                <x-button class="justify-end">
                    {{ __('Publish') }}
                </x-button>
            </div>

            <!-- Photo -->
            @livewire('image-upload', ['default_photo' => 'blog_default', 'for' => 'blog'])

            <!-- Title -->
            <div class="mt-4">
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Type your amazing title here..." :value="old('title')" required autofocus />
            </div>
            
            <!-- Content -->
            <div class="mt-4">
                <x-label for="content" :value="__('Body')" />

                <x-textarea id="content" class="block mt-1 w-full lg:min-h-full resize-none" type="text" name="content" placeholder="Tell the world your wonderful story!" rows="10" :value="old('content')" required />
            </div>

            <!-- Tags -->
            <div class="mt-4">
                <x-label for="tags" :value="__('Tags')" />

                <x-input id="tags" class="block mt-1 w-full" type="text" placeholder="Separate tags using comma ','." name="tags" :value="old('tags')" required />
            </div>
        </form>
    </x-card>
</x-app-layout>
