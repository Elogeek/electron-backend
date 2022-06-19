<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/text', name: 'app_api', methods: ['POST'])]
    public function index(Request $request): JsonResponse
    {
        $body = $request->getContent();
        $data = json_decode($body, true);


        // TODO on imagine avoir du code ici pour l'ajout dans la base de données

        // On imagine qu'on renvoie le status 'true' pour une insertion réalisée avec succès, ainsi que le contenu initial
        return $this->json([
            'status'  => true,
            'content' => $data['content'],
        ]);
    }
}
