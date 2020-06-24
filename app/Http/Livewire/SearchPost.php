<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;


class SearchPost extends Component
{

    public $foo;

    public $search = '';

    public $page = 1;


    protected $updatesQueryString = [

        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],

    ];

    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
        #$this->search = request()->query('search', $this->search);
    }


    public function render()
    {

        return view('livewire.search-post', [
            'posts' => Post::where('title', 'like', '%'.$this->search.'%')->get(),
        ]);

    }

}
