<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HatchingAndAltarController extends AbstractController
{
    #[Route('/hatching-and-altar', name: 'app_hatching_and_altar')]
    public function index(): Response
    {
        return $this->render('hatching_and_altar/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Hatching and Altar', 'url' => null],
            ],
        ]);
    }
}
