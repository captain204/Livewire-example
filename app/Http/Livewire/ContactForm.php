<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;
use Validator;

class ContactForm extends Component
{
    
    public $name;
    public $email;
    public $description;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:6',
            'email' => 'email',
            'description' => 'min:5'
        ]);
    }

    public function saveContact()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'description' => 'required'
        ]);

        Contact::create($validatedData);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

}
