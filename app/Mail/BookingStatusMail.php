<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $status;

    public function __construct($booking, $status)
    {
        $this->booking = $booking;
        $this->status = $status;
    }

    public function build()
    {
        return $this->subject('Your Booking Status')
                    ->markdown('emails.booking_status')
                    ->with([
                        'booking' => $this->booking,
                        'status' => $this->status,
                    ]);
    }
}
