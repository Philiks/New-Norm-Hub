<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class LikeComment extends Component
{
    public $like_count = 0;
    public $comment_count = 0;

    public function mount($id)
    {
        $blog = Blog::find($id)->first();
        $like_count = $blog->like_count;
        $comment_count = $blog->comment_count;
    }

    public function render()
    {
        return view('livewire.like-comment');
    }

    
}
