<?php

namespace App\Http\Livewire;

use App\Models\Photo;
use App\Models\User;
use Livewire\Component;

class DisplayBlog extends Component
{
    public $blog;

    public function mount($blog)
    {
        $this->blog = $blog;

        $author = User::where('id', '=', $blog->author_id)->first();
        $blog->author = $author->username;

        $tag_titles = [];
        foreach ($blog->tags()->get()->toArray() as $tag) {
            array_push($tag_titles, $tag['title']);
        }   
        $blog->tag_str = implode(',', $tag_titles); 

        $photo = Photo::where('id', '=', $blog->main_photo_id)->first();
        if ($photo) {
            $blog->photo = asset('storage/' . $photo->folder . '/' . $photo->filename);
        }
    }

    public function render()
    {
        return view('livewire.display-blog');
    }
}
