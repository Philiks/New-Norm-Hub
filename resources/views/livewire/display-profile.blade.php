<div>
    <x-responsive-nav-link :href="route('home')" class="rounded-full cursor-pointer bg-cover">
        <img class="rounded-full cursor-pointer bg-cover" 
                    src="{{ $profile ?? asset('images/defaults/profile_default.png') }}" 
                    width="40" height="40" />
    </x-responsive-nav-link>
</div>
