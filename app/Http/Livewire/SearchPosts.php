<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Post;

class SearchPosts extends Component
{
    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }


    public function render()
    {

        return view('livewire.search-posts', [
            'posts' => Post::where('title', 'like', '%'.$this->search.'%')->get(),
        ]);

    }


}
