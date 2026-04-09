<?php
namespace App\Service\Factory;

use App\Service\Message\EmailMessage;
use App\Service\Message\MessageInterface;

class EmailFactory implements MessageFactoryInterface
{
    public function createMessage(): MessageInterface
    {
        return new EmailMessage();
    }
}