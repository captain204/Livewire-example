<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Post;

class ShowPosts extends Component
{
    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function getPostProperty()
    {
        return Post::find($this->postId);
    }

    public function deletePost()
    {
        $this->post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }

}
