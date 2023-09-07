<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmindashController extends AbstractController
{
    #[Route('/admindash', name: 'app_admindash')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'AdmindashController',
        ]);
    }
}
