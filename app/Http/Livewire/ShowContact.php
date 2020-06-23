<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;
use App\Contact;

class ShowContact extends Component
{


    public $name;
    public $email;
    public $description;

    public function mount($id)
    {
        $contact = Contact::find($id);

        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->description = $contact->description;
    }


    public function render()
    {
        
        return view('livewire.show-contact',[
            'name' => $this->name,
            'description' => $this->description
        ]);
    }
}
