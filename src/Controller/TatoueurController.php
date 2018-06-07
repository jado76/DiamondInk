<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TatoueurController extends Controller
{
    /**
     * @Route("/tatoueur", name="tatoueur")
     */
    public function index()
    {
        return $this->render('tatoueur/index.html.twig', [
            'controller_name' => 'TatoueurController',
        ]);
    }
}
