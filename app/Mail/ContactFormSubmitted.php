<?php

namespace App\Mail;

use App\Livewire\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    
  public function build()
    {
        return $this->subject('The Contact Form Was Submitted')
            ->replyTo($this->data['email'])
            ->view('emails.contact_form_submitted');
    }

}
