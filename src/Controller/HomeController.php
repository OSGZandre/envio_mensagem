<?php
namespace App\Controller;

use App\Service\Factory\FactoryResolver;
use App\Service\Decorator\LogDecorator;
use App\Service\Decorator\TimestampDecorator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $data = 'Envio de Mensagem';
        return $this->render('home/index.html.twig', ['data' => $data]);
    }


    #[Route('/mensagem/{type}', name: 'escrever_mensagem')]
    public function mensagem($type)
    {
        $data['type'] = $type;
        return $this->render('home/mensagem.html.twig', ['data' => $data]);
    }

    #[Route('/enviar/{type}/{recipient}/{content}', name: 'enviar_mensagem')]
    public function enviar(FactoryResolver $resolver, string $type, string $recipient, string $content): Response
    {
        $recipient = base64_decode($recipient);
        $content = base64_decode($content);

        $factory = $resolver->resolve($type);

        $message = $factory->createMessage()
            ->setRecipient($recipient)
            ->setContent($content);

        $message = new LogDecorator($message);
        $message = new TimestampDecorator($message);
        $json = $message->enviar();
        dump($json);
        return new JsonResponse($json);
    }
}