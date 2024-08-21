<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;

    /**
     * Create a new message instance.
     */
    public function __construct($reservationData)
    {
        $this->reservationData = $reservationData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $emailContent = "<h1>Reservation Details</h1>";
        $emailContent .= "<p>First Name: " . $this->reservationData['first_name'] . "</p>";
        $emailContent .= "<p>Phone: " . $this->reservationData['phone'] . "</p>";
        $emailContent .= "<p>Where: " . $this->reservationData['where'] . "</p>";
        $emailContent .= "<p>Time: " . $this->reservationData['time'] . "</p>";
        $emailContent .= "<p>Start Time: " . $this->reservationData['start_time'] . "</p>";
        $emailContent .= "<p>End Time: " . $this->reservationData['end_time'] . "</p>";
        $emailContent .= "<p>Special Request: " . $this->reservationData['special_request'] . "</p>";

        return $this->subject('Form Submitted')
            ->html($emailContent);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Form Submitted',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: '', // No view needed
        );
    }

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
