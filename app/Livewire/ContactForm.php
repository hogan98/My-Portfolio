<?php

namespace App\Livewire;

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $status;

    public function save()
    {
        $validated = $this->validate([ 
            'name' => 'required|string|min:3',
            'email' => 'required|email|string|min:3',
            'message' => 'required|string',
        ]);

        try {
            Mail::to(config('mail.to'))
                ->send(new ContactFormSubmitted($validated));
        } catch(\Exception $e) {
            //do nothing
        }


        //Send Email Here: dd($validated);
        $this->name = null;
        $this->email = null;
        $this->message = null;
        $this->status = 'The contact form was successfully sent.';
    }
    
    public function clearMessage() 
    {
        $this->status = null;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
