<?php
namespace App\Service\Message;

interface MessageInterface
{
    public function setRecipient(string $recipient): self;

    public function setContent(string $content): self;

    public function enviar(): string;
}