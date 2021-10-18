<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactDoctor extends Mailable
{
    use Queueable, SerializesModels;

    public object $doctor;
    public array $data = [];

    /**
     * Create a new message instance.
     *
     * @param $doctor
     * @param $data
     */
    public function __construct($doctor, $data)
    {
        $this->doctor = $doctor;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Susisiekta su daktaru')->markdown('emails.doctors.contact');
    }
}
