<?php

namespace App\Service\Factory;

class FactoryResolver
{
    public function resolve(string $type): MessageFactoryInterface
    {
        switch ($type) {
            case 'sms':
                return new SmsFactory();
            case 'email':
                return new EmailFactory();
            case 'whatsapp':
                return new WhatsAppFactory();
            case 'telegram':
                return new TelegramFactory();
            default:
                dd('Tipo de mensagem não encontrado: ' . $type);
        }
    }
}