<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class ContactFormMail extends Mailable
{
    public $nombre;
    public $telefono;
    public $correo;
    public $informacionLote;

    public function __construct($nombre, $telefono, $correo, $informacionLote)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->informacionLote = $informacionLote;
    }

    public function build()
    {
        return $this->view('emails.contact-form');
    }   
} 