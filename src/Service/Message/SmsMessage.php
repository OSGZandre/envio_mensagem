<?php
namespace App\Service\Message;

class SmsMessage implements MessageInterface
{
    public function enviar(): string
    {
        return "Enviando SMS...";
    }
}