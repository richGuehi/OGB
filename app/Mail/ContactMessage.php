<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    // 1. On crée une variable pour stocker les données du formulaire
    public $data;

    /**
     * Create a new message instance.
     */
    // 2. On dit à la classe de récupérer les données ($data) quand on l'appelle
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // 3. On personnalise le sujet avec ce que le client a tapé
            subject: 'Nouveau message : ' . $this->data['subject'],

            // 4. L'astuce pour pouvoir répondre directement au client !
            replyTo: [
                new \Illuminate\Mail\Mailables\Address($this->data['email'], $this->data['name']),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // 5. TRÈS IMPORTANT : On dit à Laravel d'utiliser ton fichier contact.blade.php
            view: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}