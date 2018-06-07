<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RouenController extends Controller
{
    /**
     * @Route("/rouen", name="rouen")
     */
    public function index()
    {
        return $this->render('rouen/index.html.twig', [
            'controller_name' => 'RouenController',
        ]);
    }
}
