<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class ZamowieniePotwierdzenieMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $items;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order, array $items)
    {
        $this->order = $order;
        $this->items = $items;
    }

    public function build(){
        return $this->subject('Potwierdzenie zamówienia')
            ->view('emails.email-potwierdzenie');
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Zamowienie Potwierdzenie Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
