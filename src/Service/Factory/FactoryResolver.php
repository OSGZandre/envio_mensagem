<?php

namespace App\Service\Factory;

class FactoryResolver
{
    public function resolve(string $type): MessageFactoryInterface
    {
        switch($type){
            case 'sms' : return new SmsFactory();
            case 'email' : return new EmailFactory();
            default : throw new \InvalidArgumentException("Tipo inválido");
        }
    }
}