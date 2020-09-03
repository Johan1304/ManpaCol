<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mensaje extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nuevo usuario';
    public $msg;
    public $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg,$pass)
    {
        $this->msg=$msg;
        $this->pass=$pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.mailU.mensaje');
    }
}
