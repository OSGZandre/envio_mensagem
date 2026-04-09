<?php
namespace App\Service\Factory;

use App\Service\Message\TelegramMessage;
use App\Service\Message\MessageInterface;

class TelegramFactory implements MessageFactoryInterface
{
    public function createMessage(): MessageInterface
    {
        return new TelegramMessage();
    }
}
