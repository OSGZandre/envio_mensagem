<?php
namespace App\Service\Message;

interface MessageInterface
{
    public function enviar(): string;
}