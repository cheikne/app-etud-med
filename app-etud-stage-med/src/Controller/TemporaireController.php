<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TemporaireController extends AbstractController
{
    #[Route('/temporaire', name: 'app_temporaire')]
    public function index(): JsonResponse
    {
        dd('oui');
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TemporaireController.php',
        ]);
    }
}
