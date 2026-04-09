<?php
namespace App\Service\Factory;

use App\Service\Message\MessageInterface;

interface MessageFactoryInterface
{
    public function createMessage(): MessageInterface;
}