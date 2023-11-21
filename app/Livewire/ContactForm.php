<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $status;

    public function save()
    {
        // dd($this->name);
        $validated = $this->validate([ 
            'name' => 'required|string|min:3',
            'email' => 'required|email|string|min:3',
            'message' => 'required|string',
        ]);

        //Send Email Here: dd($validated);
        $this->name = null;
        $this->email = null;
        $this->message = null;
        $this->status = 'The contact form was successfully sent.';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
