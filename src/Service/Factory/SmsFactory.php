<?php
namespace App\Service\Factory;

use App\Service\Message\SmsMessage;
use App\Service\Message\MessageInterface;

class SmsFactory implements MessageFactoryInterface
{
    public function createMessage(): MessageInterface
    {
        return new SmsMessage();
    }
}