<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $photo;
    public $default_photo;
    public $rounded;
    public $width;
    public $height;

    public function mount($default_photo, $for = 'profile')
    {
        $this->default_photo = $default_photo;
        $this->rounded = $for == 'profile' ? 'rounded-full' : 'rounded-xl';
        $this->width = $for == 'profile' ? '200' : '300';
        $this->height = $for == 'profile' ? '200' : '250';
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
