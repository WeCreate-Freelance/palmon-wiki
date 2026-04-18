<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PalmonPowerController extends AbstractController
{
    #[Route('/palmon-power', name: 'app_palmon_power')]
    public function index(): Response
    {
        return $this->render('palmon_power/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Palmon Power', 'url' => null],
            ],
        ]);
    }
}
