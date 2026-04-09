<?php
namespace App\Controller;

use App\Service\Factory\FactoryResolver;
use App\Service\Decorator\LogDecorator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/message/{type}', name: 'home')]
    public function index(FactoryResolver $resolver, string $type): Response
    {
        $factory = $resolver->resolve($type);

        $message = $factory->createMessage();

        $message = new LogDecorator($message);

        return new Response($message->enviar());
    }
}