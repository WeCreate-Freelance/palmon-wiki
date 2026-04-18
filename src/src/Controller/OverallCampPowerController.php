<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverallCampPowerController extends AbstractController
{
    #[Route('/camp-power/overall-camp-power', name: 'app_overall_camp_power')]
    public function index(): Response
    {
        return $this->render('camp_power/overall_camp_power/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Camp Power', 'url' => $this->generateUrl('app_camp_power')],
                ['name' => 'How Total Power Works', 'url' => null],
            ],
        ]);
    }
}
