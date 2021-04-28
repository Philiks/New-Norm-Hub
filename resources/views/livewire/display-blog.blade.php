<x-card>
    <div class="flex flex-col">
        <!-- Photo -->
        <img class="self-center rounded-lg cursor-pointer bg-cover" 
                    src="{{ $blog->photo ?? asset('images/defaults/blog_default.png') }}" 
                    width="300" height="250" />

        <!-- Author -->
        <div class="mt-4 bg-orange-dark rounded-lg p-3">
            <div class = "block font-medium text-sm text-white lg:text-md">
                {{ __('Author') }}
            </div>

            <div class = "block font-medium text-sm text-white lg:text-base">
                {{ __($blog->author) }}
            </div>
        </div>
        
        <!-- Content -->
        <div class="mt-4 bg-orange-dark rounded-lg p-3">
            <div class = "block font-medium text-sm text-white lg:text-base">
                {{ __($blog->content) }}
            </div>
        </div>

        <!-- Tags -->
        <div class="mt-4 bg-orange-dark rounded-lg p-3">
            <div class = "block font-medium text-sm text-white lg:text-md">
                {{ __('Tags') }}
            </div>

            <div class = "block font-medium text-sm text-white lg:text-base">
                {{ __($blog->tag_str) }}
            </div>
        </div>
    </div>
</x-card>