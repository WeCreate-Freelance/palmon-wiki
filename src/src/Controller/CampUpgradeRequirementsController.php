<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CampUpgradeRequirementsController extends AbstractController
{
    #[Route('/camp-power/camp-upgrade-requirements', name: 'app_camp_upgrade_requirements')]
    public function index(): Response
    {
        return $this->render('camp_power/camp_upgrade_requirements/index.html.twig', [
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => $this->generateUrl('app_home')],
                ['name' => 'Camp Power', 'url' => $this->generateUrl('app_camp_power')],
                ['name' => 'Camp Upgrade Requirements', 'url' => null],
            ],
        ]);
    }
}
