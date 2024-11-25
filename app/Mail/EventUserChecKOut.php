<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventUserChecKOut extends Mailable
{
    use Queueable, SerializesModels;

public $booking;
public $resortOwner;

    public function __construct($booking, $resortOwner)
    {
        $this->booking = $booking;
        $this->resortOwner = $resortOwner;
    }

    public function build(){
        return $this->from($this->resortOwner->email) // Use resort owner's email as the sender
        ->view('emails.eventUserCheckOut') // Email template
        ->subject('Your Event Booking has been Check Out') // Corrected subject line
        ->with([
            'booking' => $this->booking,
            'resortOwner' => $this->resortOwner,
        ]);
    }


}