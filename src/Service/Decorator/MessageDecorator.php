<?php
namespace App\Service\Decorator;

use App\Service\Message\MessageInterface;

abstract class MessageDecorator implements MessageInterface
{
    protected MessageInterface $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }
}