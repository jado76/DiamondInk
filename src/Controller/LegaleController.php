<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LegaleController extends Controller
{
    /**
     * @Route("/legale", name="legale")
     */
    public function index()
    {
        return $this->render('legale/index.html.twig', [
            'controller_name' => 'LegaleController',
        ]);
    }
}
