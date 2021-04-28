@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'bg-red-900 rounded-lg px-3 p-1']) }}>
        <div class="font-medium text-white lg:text-lg">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-2 list-disc list-inside text-sm text-white lg:text-base">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
