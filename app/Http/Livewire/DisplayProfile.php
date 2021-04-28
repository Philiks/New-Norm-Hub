<?php

namespace App\Http\Livewire;

use App\Models\Photo;
use App\Models\User;
use Livewire\Component;

class DisplayProfile extends Component
{
    public $profile;

    public function mount()
    {
        $photo = Photo::where('id', '=', auth()->user()->profile_id)->first();
        
        if ($photo) {
            $this->profile = asset('storage/' . $photo->folder . '/' . $photo->filename);
        }
    }

    public function render()
    {
        return view('livewire.display-profile');
    }
}
