<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BestWayToIncreasePowerFastController extends AbstractController
{
    #[Route('/camp-power/best-way-to-increase-power-fast', name: 'app_best_way_to_increase_power_fast')]
    public function index(): Response
    {
        return $this->render('camp_power/best_way_to_increase_power_fast/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Camp Power', 'url' => $this->generateUrl('app_camp_power')],
                ['name' => 'Best Way To Increase Power Fast', 'url' => null],
            ],
        ]);
    }
}
