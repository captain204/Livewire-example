<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    
    public $message;
    public $platform;

    public function mount()
    {
        $this->fill(['message' => 'Hello World!','platform'=>'github']);

    }

    public function render()
    {
        return view('livewire.hello-world');
    }



}
