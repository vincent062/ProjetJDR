<?php
// src/Controller/PresentationController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Le nom de la classe est maintenant PresentationController
final class PresentationController extends AbstractController
{
    // Le nom de la route est maintenant app_presentation
    #[Route('/qui-sommes-nous', name: 'app_presentation')]
    public function index(): Response
    {
        // On indique le nouveau chemin du template
        return $this->render('presentation/index.html.twig');
    }
}