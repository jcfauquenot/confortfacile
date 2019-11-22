<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    /**
     * @Route("/pizza", name="pizza")
     */
    public function index(MessageGenerator $messageGenerator)
    {

        $message = $messageGenerator->getHappyMessage();

        return $this->render('pizza/index.html.twig', [
            'controller_name' => 'PizzaController',
            'message' => $message,
        ]);
    }
}
