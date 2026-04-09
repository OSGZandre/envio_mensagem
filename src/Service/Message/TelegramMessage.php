<?php
namespace App\Service\Message;

class TelegramMessage implements MessageInterface
{
    private string $chatId = '';
    private string $text = '';

    public function setRecipient(string $recipient): self
    {
        $this->chatId = $recipient;
        return $this;
    }

    public function setContent(string $content): self
    {
        $this->text = $content;
        return $this;
    }

    public function enviar(): string
    {
        return "Enviando Telegram para chat {$this->chatId}: {$this->text}";
    }
}
