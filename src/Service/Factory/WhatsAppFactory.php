<?php
namespace App\Service\Factory;

use App\Service\Message\WhatsAppMessage;
use App\Service\Message\MessageInterface;

class WhatsAppFactory implements MessageFactoryInterface
{
    public function createMessage(): MessageInterface
    {
        return new WhatsAppMessage();
    }
}
