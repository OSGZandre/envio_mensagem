<?php
namespace App\Service\Message;

class WhatsAppMessage implements MessageInterface
{
    private string $phoneNumber = '';
    private string $message = '';


    public function setRecipient(string $recipient): self
    {
        $this->phoneNumber = $recipient;
        return $this;
    }

    public function setContent(string $content): self
    {
        $this->message = $content;
        return $this;
    }

    public function enviar(): string
    {
        return "Enviando WhatsApp para {$this->phoneNumber}: {$this->message}";
    }
}
