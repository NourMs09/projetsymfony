<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/services', name: 'showService')]
public function showService($name): Response
{
    return $this->render('service/showService.html.twig', [
        'name' => $name,
    ]);
}

#[Route('/service/goToIndex', name: 'go_to_index')]

public function goToIndex(): RedirectResponse
{
   return $this->redirectToRoute('index');
}
}
