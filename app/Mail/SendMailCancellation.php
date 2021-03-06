<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailCancellation extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $pdf)
    {
        $this->data = $data;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.cancellation')
            ->from("info@gbsurfersparadise.com.au", "Cancellation")
            ->attachData($this->pdf->output(), 'cancellation.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
