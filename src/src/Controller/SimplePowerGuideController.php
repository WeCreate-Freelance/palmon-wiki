<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SimplePowerGuideController extends AbstractController
{
    #[Route('/palmon-power/simple-power-guide', name: 'app_simple_power_guide')]
    public function index(): Response
    {
        return $this->render('palmon_power/simple_power_guide/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Palmon Power', 'url' => $this->generateUrl('app_palmon_power')],
                ['name' => 'Simple Power Guide', 'url' => null],
            ],
        ]);
    }
}
