@foreach ($blogs as $blog)
    <form method="GET" action="{{ route('blog.show', $blog->id) }}">
        <div class="flex flex-col items-center cursor-pointer" onclick="document.getElementById('submit').click();">
            <img class="rounded-lg resize-none"
                    src="{{ $blog->photo ?? asset('images/defaults/blog_default.png') }}" 
                    width="250" height="250" />

            <div class="mx-3 w-full bg-orange overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-orange border-b border-orange-light">
                    {{ _($blog->author)}}
                </div>
            </div>

            <div class="mx-3 w-full bg-orange-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-orange-dark border-b border-orange-light">
                    {{ _($blog->tag_str)}}
                </div>
            </div>

            <x-button id="submit" class="hidden">
            </x-button>
        </div>
    </form>
@endforeach
