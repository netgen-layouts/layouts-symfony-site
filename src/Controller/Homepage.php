<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Homepage extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function __invoke(): Response
    {
        return $this->render('homepage/homepage.html.twig');
    }
}
