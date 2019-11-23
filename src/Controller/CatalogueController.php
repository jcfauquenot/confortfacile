<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    /**
     * @Route("/catalogue", name="pizza")
     */
    public function index(MessageGenerator $messageGenerator)
    {
        $message = $messageGenerator->getHappyMessage();

        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'message' => $message,
        ]);
    }
}
