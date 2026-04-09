<?php
namespace App\Service\Decorator;

class TimestampDecorator extends MessageDecorator
{
    public function setContent(string $content): self
    {
        $this->message->setContent($content);
        return $this;
    }

    public function setRecipient(string $recipient): self
    {
        $this->message->setRecipient($recipient);
        return $this;
    }

    public function enviar(): string
    {
        $result = $this->message->enviar();
        $timestamp = date('Y-m-d H:i:s');
        return $result . " [DATA: " . $timestamp . "]";
    }
}
