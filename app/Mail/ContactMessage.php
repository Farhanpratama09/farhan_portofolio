<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public array $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->subject('Pesan kontak baru dari ' . $this->contact['name'])
            ->replyTo($this->contact['email'], $this->contact['name'])
            ->to(config('portfolio.email'))
            ->view('emails.contact');
    }
}
