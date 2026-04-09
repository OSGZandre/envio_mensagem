<?php
namespace App\Service\Decorator;

class LogDecorator extends MessageDecorator
{
    public function enviar(): string
    {
        $result = $this->message->enviar();
        return $result . " [LOG: mensagem enviada]";
    }
}