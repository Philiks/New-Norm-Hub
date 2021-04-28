<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\User;
use Livewire\Component;

class DisplayFeaturedBlog extends Component
{
    public $blogs = [];

    public function mount()
    {
        $this->blogs = Blog::where('is_featured', '=', true)->get();

        foreach ($this->blogs as $blog) {
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
    }

    public function render()
    {
        return view('livewire.display-featured-blog');
    }
}
