<?php
namespace App\Service\Message;

class EmailMessage implements MessageInterface
{
    public function enviar(): string
    {
        return "Enviando Email...";
    }
}