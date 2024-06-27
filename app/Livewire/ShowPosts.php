<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;


class ShowPosts extends Component
{
    // public $posts;

    // public function mount()
    // {
    //     $this->posts = Post::all();
    // }
    public function render()
    {
        return view('livewire.show-posts' , [
            'posts' => Post::all()
        ]);
    }
}
