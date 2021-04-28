<div class="flex flex-col items-center mt-4">
    <img class="{{ $rounded }} bg-cover cursor-pointer" onclick="document.getElementById('photo').click();" 
            src="{{ $photo == null ? asset('images/defaults/' . $default_photo . '.png') : $photo->temporaryUrl() }}" 
            width="{{ $width }}" height="{{ $height }}" />

    <div class="mt-2">
        <x-input id="photo" class="block mt-1 w-full hidden" 
                type="file" 
                name="photo" 
                wire:model="photo" />
    </div>
</div>
