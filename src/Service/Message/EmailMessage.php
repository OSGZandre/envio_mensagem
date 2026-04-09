<?php
namespace App\Service\Message;

class EmailMessage implements MessageInterface
{
    private string $from = 'noreply@gmail.com';
    private string $to = '';
    private string $body = '';

    public function setRecipient(string $recipient): self
    {
        $this->to = $recipient;
        return $this;
    }

    public function setContent(string $content): self
    {
        $this->body = $content;
        return $this;
    }

    public function enviar(): string
    {
        return "Enviando Email de {$this->from} para {$this->to}
        : {$this->body}";
    }
}