<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Post;

class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.show-posts',[
            'posts' => Post::all(),
        ]);
    }
}
